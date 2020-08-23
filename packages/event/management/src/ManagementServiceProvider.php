<?php

namespace Event\Management;

use Illuminate\Support\ServiceProvider;

class ManagementServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
         $this->loadRoutesFrom(__DIR__.'/routes.php');
         $this->loadMigrationsFrom(__DIR__.'/migrations');
         $this->loadViewsFrom(__DIR__.'/views', 'Management');
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
