<?php

require __DIR__ . '/../vendor/autoload.php';

use Shimomo\Laravel\Ping;

/**
 * @author shimomo
 */
class PingTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Shimomo\Ping\LaravelPing
     */
    protected $LaravelPing;

    /**
     * @return void
     */
    public function setUp()
    {
        $this->laravelPing = new Ping();
    }

    /**
     * @return void
     */
    public function testSuccess()
    {
        $this->assertTrue($this->laravelPing->execute('example.com'));
    }

    /**
     * @return void
     */
    public function testFailure()
    {
        $this->assertFalse($this->laravelPing->execute('shimomo.example.com'));
    }
}
