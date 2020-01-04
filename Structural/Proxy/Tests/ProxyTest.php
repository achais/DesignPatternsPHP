<?php

namespace DesignPatterns\Structural\Proxy\Tests;

use DesignPatterns\Structural\Proxy\RecordProxy;
use PHPUnit\Framework\TestCase;

class ProxyTest extends TestCase
{
    public function testSetAttribute()
    {
        $data = [];
        $proxy = new RecordProxy($data);
        $proxy->site = 'google';
        $this->assertEquals($proxy->site, 'google');
    }
}
