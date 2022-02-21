<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {


        // Return một lần cái resolve
        $this->app->singleton('now', function () {
            return time();
        });

        $now = time();
        $this->app->instance('now2', $now);


        $this->app->resolving('now2', function ($object, $app) {
            var_dump('123');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
