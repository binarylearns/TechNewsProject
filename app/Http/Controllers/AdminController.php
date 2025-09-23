<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    
    public function show_admin_login_form()
    {

        return view('admin.login');

    }

    public function show_admin_dashboard()
    {
        return view('admin.dashboard');

    }


    public function admin_login(Request $request)
    {
        $credentials = $request-> validate([

                'email'=> 'required|email',
                'password'=>'required|min:6'


        ]);


        if(Auth::guard('admin')->attempt($credentials))
        {

            return redirect()->intended(route('admin.show_dashboard'));
        }
        //login failed

        return back()->withErrors([ 

             'email' => 'Invalid Credentials',


        ])->withInput();




    }


    public function adminlogout(Request $request)

    {
     Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');

    }



}
