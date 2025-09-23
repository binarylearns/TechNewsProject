<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{

public function show_user_login_form()
{
    return view('user.login');
}

public function show_user_registration_form()
{
    return view('user.registration');
}

    public function show_user_dashboard()
    {
        return view('user.dashboard');

    }

    public function register_user(Request $request)
    {
        $credentials = $request->validate([

            'name' =>'string|required|max:255',
            'email'=>'email|required|unique:users,email',
            'password'=>'required|confirmed|min:6',
        ]);

        $credentials['password'] = Hash::make($credentials['password']);
        $user = User::create($credentials);
        Auth::guard('web')->login($user);

        return redirect()->route('user.dashboard');


    }



      public function user_logout(Request $request)

    {
     Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');

    }


    public function login_user(Request $request){

        $credentials = $request->validate([

            'email'=>'required|email',
            'password'=>'required|min:6',


        ]);

        
        if(Auth::guard('web')->attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->intended(route('user.dashboard'));;

        }

        return back()->withErrors([

            'email'=> 'The provided credentials donot match our record.',


        ])->onlyInput('email');



    }




}
