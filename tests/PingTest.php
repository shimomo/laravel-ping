<?php

require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Shimomo\Laravel\Ping;

/**
 * @author shimomo
 */
class PingTest extends TestCase
{
    /**
     * @var Ping
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
        $this->assertInternalType('double', $this->ping->execute('example.com', 128, 5));
    }

    /**
     * @return void
     */
    public function testFailure()
    {
        $this->assertFalse($this->ping->execute('shimomo.example.com'));
    }
}
