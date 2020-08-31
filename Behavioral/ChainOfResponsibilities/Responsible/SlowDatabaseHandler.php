<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\Responsible;

use DesignPatterns\Behavioral\ChainOfResponsibilities\Handler;
use Psr\Http\Message\RequestInterface;

/**
 * 创建数据库处理器。
 */
class SlowDatabaseHandler extends Handler
{
    /**
     * @param RequestInterface $request
     * 传入请求类对象 $request 。
     *
     * @return string|null
     * 定义处理方法，下面应该是个数据库查询动作，但是简单化模拟，直接返回一个 'Hello World' 字符串作查询结果。
     */
    protected function processing(RequestInterface $request)
    {
        // 这是一个模拟输出， 在生产代码中你应该调用一个缓慢的 （相对于内存来说） 数据库查询结果。

        return 'Hello World!';
    }
}