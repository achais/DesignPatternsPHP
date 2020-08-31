<?php

namespace DesignPatterns\Behavioral\NullObject;

/**
 * 重要特征：空日记必须像其他日记意向从这个接口继承。
 */
interface LoggerInterface
{
    public function log(string $str);
}