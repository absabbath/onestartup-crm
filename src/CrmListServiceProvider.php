<?php

namespace Onestartup\Crm;

use Illuminate\Support\ServiceProvider;

class CrmListServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
        $this->loadMigrationsFrom(__DIR__.'/migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Onestartup\Crm\AdminCrmController');
        $this->loadViewsFrom(__DIR__.'/views', 'crm');
    }
}
