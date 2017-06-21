<?php

namespace Sarkerbappa\Allbdpostcode;

use Illuminate\Support\ServiceProvider;

class AllPostcodServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
         if (! $this->app->routesAreCached()) {
              require __DIR__.'/routes.php';
           }
           
           $this->loadViewsFrom(__DIR__.'/views', 'Allbdpostcode');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
