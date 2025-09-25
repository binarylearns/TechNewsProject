<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function show_add_category()
    {
        return view('admin.add-category');

    }


}
