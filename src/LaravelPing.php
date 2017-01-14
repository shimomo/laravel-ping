<?php

namespace Shimomo\Ping;

use JJG\Ping;

/**
 * @author shimomo
 */
class LaravelPing
{
    /**
     * @param  string $host
     * @return boolean
     */
    public function execute($host)
    {
        $ping = new Ping($host);
        $result = $ping->ping();
        if ($result) {
            return true;
        }
        return false;
    }
}
