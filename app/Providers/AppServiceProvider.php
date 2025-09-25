<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // this is to access post
         View::composer('*', function ($view) {
        $view->with('posts', Post::all());
    });

        // this is to access category
        $categories = Category::all();
        View::share('categories', $categories);
    }
}
