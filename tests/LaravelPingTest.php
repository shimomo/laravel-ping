<?php

require __DIR__ . '/../vendor/autoload.php';

use Shimomo\Ping\LaravelPing;

/**
 * @author shimomo
 */
class LaravelPingTest extends PHPUnit_Framework_TestCase
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
        $this->laravelPing = new LaravelPing();
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
