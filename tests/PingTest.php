<?php

require __DIR__ . '/../vendor/autoload.php';

use Shimomo\Laravel\Ping;

/**
 * @author shimomo
 */
class PingTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Shimomo\Laravel\Ping
     */
    protected $ping;

    /**
     * @return void
     */
    public function setUp()
    {
        $this->ping = new Ping();
    }

    /**
     * @return void
     */
    public function testSuccess()
    {
        $this->assertInternalType('double', $this->ping->execute('example.com'));
    }

    /**
     * @return void
     */
    public function testFailure()
    {
        $this->assertFalse($this->ping->execute('shimomo.example.com'));
    }
}
