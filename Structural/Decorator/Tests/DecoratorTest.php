<?php

namespace DesignPatterns\Structural\Decorator\Tests;

use DesignPatterns\Structural\Decorator;
use PHPUnit\Framework\TestCase;

/**
 * 创建自动化测试单元 DecoratorTest 。
 */
class DecoratorTest extends TestCase
{
    /**
     * @var Decorator\Webservice
     */
    private $service;

    /**
     * 传入字符串 'foobar' 。
     */
    protected function setUp()
    {
        $this->service = new Decorator\Webservice('foobar');
    }

    /**
     * 测试 JSON 装饰者。
     * 这里的 assertEquals 是为了判断返回的结果是否符合预期。
     */
    public function testJsonDecorator()
    {
        $service = new Decorator\JsonRenderer($this->service);

        $this->assertEquals('"foobar"', $service->renderData());
    }

    /**
     * 测试 Xml 装饰者。
     */
    public function testXmlDecorator()
    {
        $service = new Decorator\XmlRenderer($this->service);

        $this->assertXmlStringEqualsXmlString('<?xml version="1.0"?><content>foobar</content>', $service->renderData());
    }
}
