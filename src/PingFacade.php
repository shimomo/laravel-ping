<?php

namespace Shimomo\Laravel;

use Illuminate\Support\Facades\Facade;

/**
 * @author shimomo
 */
class PingFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ping';
    }
}
