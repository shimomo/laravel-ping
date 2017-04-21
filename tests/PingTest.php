<?php

require __DIR__ . '/../vendor/autoload.php';

/**
 * @author shimomo
 */
class PingTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Shimomo\Laravel\Ping
     */
    protected $ping;

    /**
     * @return void
     */
    public function setUp()
    {
        $this->ping = new \Shimomo\Laravel\Ping();
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
