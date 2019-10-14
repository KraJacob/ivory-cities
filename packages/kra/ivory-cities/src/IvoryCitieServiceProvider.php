<?php

namespace Kra\IvoryCities;
use Illuminate\Support\ServiceProvider;

class IvoryCitieServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
        $this->publishes([__DIR__.'/Database/seeds'=>database_path('seeds')],'seeds');
    }
}
