<?php

namespace DesignPatterns\Creational\Pool\Tests;

use DesignPatterns\Creational\Pool\WorkerPool;
use PHPUnit\Framework\TestCase;

class PoolTest extends TestCase
{
    public function testCanGetNewInstancesWithGet()
    {
        $pool = new WorkerPool();
        $worker1 = $pool->get();
        $worker2 = $pool->get();

        $this->assertEquals(2, $pool->count());
        $this->assertNotSame($worker1, $worker2);
    }

    public function testCanGetSameInstanceTwiceWhenDisposingItFirst()
    {
        $pool = new WorkerPool();
        $worker1 = $pool->get();
        $pool->dispose($worker1);
        $worker2 = $pool->get();

        $this->assertEquals(1, $pool->count());
        $this->assertSame($worker1, $worker2);
    }

    public function testReserveString()
    {
        $string = '123456';
        $pool = new WorkerPool();
        $worker = $pool->get();

        $this->assertEquals('654321', $worker->run($string));
    }
}