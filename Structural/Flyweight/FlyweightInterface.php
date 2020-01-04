<?php

namespace DesignPatterns\Structural\Flyweight;

/**
 * 创建享元接口 FlyweightInterface 。
 */
interface FlyweightInterface
{

    /**
     * 创建传递函数。
     * 返回字符串格式数据。
     */
    public function render(string $extrinsicState): string;
}
