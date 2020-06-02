<?php

namespace Uyoobonga\StateCity;

use Illuminate\Support\ServiceProvider;

class StateCityServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__. '/routes/web.php');
        $this->loadViewsFrom(__DIR__. '/views', 'statecity');
        $this->loadMigrationsFrom(__DIR__. '/database/migrations');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

    }

}
