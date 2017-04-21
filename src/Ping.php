<?php

namespace Shimomo\Laravel;

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
     */
    public function __construct()
    {
        $this->geerlingguyPing = new \JJG\Ping('example.com');
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

        if (! is_null($ttl)) {
            $this->geerlingguyPing->setTtl($ttl);
        }

        if (! is_null($timeout)) {
            $this->geerlingguyPing->setTimeout($timeout);
        }

        return $this->geerlingguyPing->ping();
    }
}
