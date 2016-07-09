<?php

namespace App\Providers;

use Event;
use App\Player;
use App\Events\ScoreUpdated;
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
        Player::updated(function () {
            Event::fire(new ScoreUpdated(true));
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
