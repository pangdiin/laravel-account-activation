<?php

namespace App\Providers;

use Mail;
use App\User;
use App\Events\UserRegistered;
use App\Mail\SendActivationToken;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        User::created(function ($user) {

            $token = $user->activationToken()->create([
                'token' =>  str_random(128),
            ]);

            event(new UserRegistered($user));
            // Mail::to($user)->send(new SendActivationToken($token));

        });
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
