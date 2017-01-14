<?php

namespace Shimomo\Ping;

use Illuminate\Support\Facades\Facade;

/**
 * @author shimomo
 */
class LaravelPingFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ping';
    }
}
