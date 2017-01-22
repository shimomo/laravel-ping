<?php

namespace Shimomo\Laravel;

use Illuminate\Support\ServiceProvider;

/**
 * @author shimomo
 */
class PingServiceProvider extends ServiceProvider
{
    /**
     * @var bool
     */
    protected $defer = true;

    /**
     * @return void
     */
    public function register()
    {
        $this->app->singleton('ping', function ($app) {
            return new Ping();
        });
    }

    /**
     * @return array
     */
    public function provides()
    {
        return ['ping'];
    }
}
