<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Geolocation;
use App\Services\Map;


class GeolocationProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Geolocation::class , function ($app){
            $map = new Map();
            $app->make(Geolocation::class);
            return new Geolocation($map); 
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
