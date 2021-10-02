<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

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
        /////
//        $this->registerPolicies();

        ResetPassword::createUrlUsing(function ($user, string $token) {
            return $token;
        });

        ////
        View::composer('*', function ($view) {
           if (Auth::guard('student')->check()) {
               $view->with('messages', Auth::guard('student')->user()->messages);
           }
        });
    }
}
