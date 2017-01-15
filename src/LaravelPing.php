<?php

namespace Shimomo\Ping;

use JJG\Ping;

/**
 * @author shimomo
 */
class LaravelPing
{
    /**
     * @param  string   $host
     * @param  int|null $ttl
     * @param  int|null $timeout
     * @return bool
     */
    public function execute(string $host, int $ttl = null, int $timeout = null)
    {
        $ping = new Ping($host);

        if (!is_null($ttl)) {
            $ping->setTtl($ttl);
        }

        if (!is_null($timeout)) {
            $ping->setTimeout($timeout);
        }

        if ($ping->ping()) {
            return true;
        }
        return false;
    }
}
