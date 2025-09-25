<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{


    public function send_category()
    {
        $categories = Category::all();
        return view('admin.add-category',compact('categories'));


    }


    public function show($slug)
    {

      $category = Category::with('posts')->where('slug', $slug)->firstOrFail();
    return view('user.show', compact('category'));

    }
    

    public function store_category(Request $request)
    {
        $validatedData = $request->validate([

                    'category' => 'string|max:255',
                    'slug'=>'string|max:255',
 

        ]);

        $category = Category::create($validatedData);
        return redirect()->route('admin.add_category')->with('success','category created successfully');
        


    }


}
