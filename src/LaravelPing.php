<?php

namespace Shimomo\Ping;

use Exception;
use JJG\Ping;

/**
 * @author shimomo
 */
class LaravelPing
{
    /**
     * @var JJG\Ping
     */
    protected $instance;

    /**
     * @throws Exception
     */
    public function __construct()
    {
        try {
            $this->instance = new Ping('example.com');
        } catch (Exception $e) {
            throw new Exception('Error Processing Request', 1);
        }
    }

    /**
     * @param  string   $host
     * @param  int|null $ttl
     * @param  int|null $timeout
     * @return bool
     */
    public function execute(string $host, int $ttl = null, int $timeout = null)
    {
        $this->instance->setHost($host);

        if (!is_null($ttl)) {
            $this->instance->setTtl($ttl);
        }

        if (!is_null($timeout)) {
            $this->instance->setTimeout($timeout);
        }

        if ($this->instance->ping()) {
            return true;
        }
        return false;
    }
}
