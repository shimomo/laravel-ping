<?php

namespace Shimomo\Laravel;

use Exception;
use JJG\Ping as GeerlingguyPing;

/**
 * @author shimomo
 */
class Ping
{
    /**
     * @var JJG\Ping
     */
    protected $geerlingguyPing;

    /**
     * @return void
     * @throws Exception
     */
    public function __construct()
    {
        try {
            $this->geerlingguyPing = new GeerlingguyPing('example.com');
        } catch (Exception $e) {
            throw new Exception('Error Processing Request', 1);
        }
    }

    /**
     * @param  string   $host
     * @param  int|null $ttl
     * @param  int|null $timeout
     * @return double|bool
     */
    public function execute(string $host, int $ttl = null, int $timeout = null)
    {
        $this->geerlingguyPing->setHost($host);

        if (!is_null($ttl)) {
            $this->geerlingguyPing->setTtl($ttl);
        }

        if (!is_null($timeout)) {
            $this->geerlingguyPing->setTimeout($timeout);
        }

        return $this->geerlingguyPing->ping();
    }
}
