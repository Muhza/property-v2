<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

//helpers
use View;

//models
use App\Category;
use App\Location;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('categories', Category::all());
        View::share('locations', Location::all());
    }
}
