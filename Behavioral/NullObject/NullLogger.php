<?php

namespace DesignPatterns\Behavioral\NullObject;

/**
 * 创建一个空日记类实现日记接口。
 */
class NullLogger implements LoggerInterface
{
    public function log(string $str)
    {
        // 什么也不用做
    }
}