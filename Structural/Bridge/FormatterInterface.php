<?php

namespace DesignPatterns\Structural\Bridge;

/**
 * 创建格式化接口。
 */
interface FormatterInterface
{
    public function format(string $text);
}
