<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function show_add_post()
    {

        return view('admin.add-post');

    }

    public function index()
    {
       
        return view('welcome');


    }


    public function store_post(Request $request)
    {
        $validatedData = $request->validate([

            'title' => 'required|string|max:255',
            'content'=>'string|required',
            'image'=>'required|max:2048',
            'category_id'=>'required|exists:categories,id',



        ]);

        $path=$request->file('image')->store('images','public');
        $validatedData['image'] = $path;
        $post = Post::create($validatedData);
        return redirect()->route('admin.show_add_post')->with('success','Post created successfully');
       

    }

    public function show_post(Post $post)
    {

        return view('user.show-post', compact('post'));

    }




}
