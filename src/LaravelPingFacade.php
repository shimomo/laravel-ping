<?php

namespace Shimomo\Ping;

use Illuminate\Support\Facades\Facade;

/**
 * @author shimomo
 */
class LaravelPing extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ping';
    }
}
