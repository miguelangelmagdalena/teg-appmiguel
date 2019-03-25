<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use  Illuminate\Support\Facades\Schema; //Para solucionar error: SQLSTATE[42000]: Syntax error or access violation: 1071

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
        //Para solucionar error: SQLSTATE[42000]: Syntax error or access violation: 1071
        Schema::defaultStringLength(191);
    }
}
