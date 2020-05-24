<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; //Database Class Needed To Set The Default String Size.

class AppServiceProvider extends ServiceProvider
{
    
    //Boot Application Function
    public function boot()
    {
        Schema::defaultStringLength(191); //So we will not have Database Errors
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
