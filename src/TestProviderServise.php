<?php

namespace Alzughbieh\HamzaPic;

use Illuminate\Support\ServiceProvider;

class TestProviderServise extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Alzughbieh\HamzaPic\TestControoler');
        $this->LoadViewsFrom(__DIR__.'/views','hamza');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';

    }
}
