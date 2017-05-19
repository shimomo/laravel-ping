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
     * @param  string   $url
     * @param  int|null $ttl
     * @param  int|null $timeout
     * @return double|bool
     */
    public function execute(string $url, int $ttl = null, int $timeout = null)
    {
        $this->geerlingguyPing->setHost(parse_url($url, PHP_URL_HOST));

        if (! is_null($ttl)) {
            $this->geerlingguyPing->setTtl($ttl);
        }

        if (! is_null($timeout)) {
            $this->geerlingguyPing->setTimeout($timeout);
        }

        return $this->geerlingguyPing->ping();
    }
}
