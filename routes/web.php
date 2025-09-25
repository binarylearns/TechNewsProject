<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UsersController;
use Database\Seeders\AdminSeeder;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');


//This is for showing admin_login_form
Route::get('/admin/login',[AdminController::class,'show_admin_login_form'])->name('admin.login_form');
Route::middleware('admin')->group(function()
{
Route::get('/admin/dashboard', [AdminController::class,'show_admin_dashboard'])->name('admin.show_dashboard');
});
// this is for route of admin login
Route::post('adminlogin',[AdminController::class,'admin_login'])->name('admin_login');
//logout of the admin panel
Route::post('/admin/logout',[AdminController::class,'adminlogout'])->name('admin.logout');


// This is for users users form
// this is for user logi_in_form
Route::get('user/loginfrom',[UsersController::class,'show_user_login_form'])->name('user.show_login_form');
//this is fro showinf user registration_page
Route::get('user/userregistrationform',[UsersController::class,'show_user_registration_form'])->name('user.show_user_regitration_form');

// this is to show admin panel for registered users
Route::post('user/userpanel',[UsersController::class,'register_user'])->name('register.user');

// this is to show userdashboard 

//  user logout button routes
Route::post('user/logout',[UsersController::class,'user_logout'])->name('user.logout');

//user login thing
Route::post('user/loginloginform',[UsersController::class,'login_user'])->name('login.user');



Route::middleware('auth')->group(function()
{
Route::get('user/dashboard',[UsersController::class,'show_user_dashboard'])->name('user.dashboard');
});

// to show the add-category page
Route::get('admin/addcategory',[DashboardController::class,'show_add_category'])->name('admin.add_category');

Route::post('admin/storecategory',[CategoryController::class,'store_category'])->name('admin.store_category');

// this is to show the category-show function one page per category
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.show');

// this is to show admin add-post section in admin dashbaord
Route::get('admin/addpost',[PostController::class,'show_add_post'])->name('admin.show_add_post');

// this is to show store_post 
Route::post('admin/storepost',[PostController::class,'store_post'])->name('admin.store_post');
