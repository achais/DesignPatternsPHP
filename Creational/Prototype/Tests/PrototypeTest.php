<?php

namespace DesignPatterns\Creational\Prototype\Tests;

use DesignPatterns\Creational\Prototype\BarBookPrototype;
use DesignPatterns\Creational\Prototype\FooBookPrototype;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    public function testCanGetFooBook()
    {
        $fooPrototype = new FooBookPrototype();
        $barPrototype = new BarBookPrototype();

        for ($i = 0; $i < 10; $i++) {
            $book = clone $fooPrototype;
            $book->setTitle('Foo Book No ' . $i);
            $this->assertInstanceOf(FooBookPrototype::class, $book);
        }

        for ($i = 0; $i < 5; $i++) {
            $book = clone $barPrototype;
            $book->setTitle('Bar Book No ' . $i);
            $this->assertInstanceOf(BarBookPrototype::class, $book);
        }
    }

    public function testCloneLessThanNew()
    {
        $fooPrototype = new FooBookPrototype();

        // 使用 new 耗时
        $newStartTime = microtime(true);
        for ($i = 0; $i < 1000000; $i++) {
            $book = new FooBookPrototype();
            $book->setTitle('Foo Book No ' . $i);
        }
        $newEndTime = microtime(true);
        $newRunTime = $newEndTime - $newStartTime;

        // 使用 clone 耗时
        $cloneStartTime = microtime(true);
        for ($i = 0; $i < 1000000; $i++) {
            $book = clone $fooPrototype;
            $book->setTitle('Bar Book No ' . $i);
        }
        $cloneEndTime = microtime(true);
        $cloneRunTime = $cloneEndTime - $cloneStartTime;

        $this->assertLessThan($newRunTime, $cloneRunTime);
    }
}