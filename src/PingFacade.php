<?php

namespace Shimomo\Laravel;

/**
 * @author shimomo
 */
class PingFacade extends \Illuminate\Support\Facades\Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ping';
    }
}
