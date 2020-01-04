<?php

namespace DesignPatterns\Structural\Bridge\Tests;

use DesignPatterns\Structural\Bridge\HelloWorldService;
use DesignPatterns\Structural\Bridge\HtmlFormatter;
use DesignPatterns\Structural\Bridge\PlainTextFormatter;
use PHPUnit\Framework\TestCase;

/**
 * 创建自动化测试单元 BridgeTest 。
 */
class BridgeTest extends TestCase
{

    /**
     * 使用 HelloWorldService 分别测试文本格式实现类和 HTML 格式实
     * 现类。
     */
    public function testCanPrintUsingThePlainTextPrinter()
    {
        $service = new HelloWorldService(new PlainTextFormatter());
        $this->assertEquals('Hello World', $service->get());

        // 现在更改实现方法为使用 HTML 格式器。
        $service->setImplementation(new HtmlFormatter());
        $this->assertEquals('<p>Hello World</p>', $service->get());
    }
}
