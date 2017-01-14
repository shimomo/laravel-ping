<?php

namespace Shimomo\Ping;

use Illuminate\Support\ServiceProvider;

/**
 * @author shimomo
 */
class LaravelPingServiceProvider extends ServiceProvider
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
            return new LaravelPing();
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
