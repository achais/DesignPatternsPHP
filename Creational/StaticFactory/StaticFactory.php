<?php

namespace DesignPatterns\Creational\StaticFactory;

/**
 * 注意点1: 记住，静态意味着全局状态，因为它不能被模拟进行测试，所以它是有弊端的
 * 注意点2: 不能被分类或模拟或有多个不同的实例。
 */
final class StaticFactory
{
    public static function factory(string $type): FormatterInterface
    {
        if ($type == 'string') {
            return new FormatString();
        }

        if ($type == 'number') {
            return new FormatNumber();
        }

        throw new \InvalidArgumentException('Unknown format given');
    }
}