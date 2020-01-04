<?php

namespace DesignPatterns\Structural\Facade;

/**
 * 创建操作系统接口类 OsInterface 。
 */
interface OsInterface
{
    /**
     * 声明关机方法。
     */
    public function halt();

    /**
     * 声明获取名称方法，返回字符串格式数据。
     */
    public function getName(): string;
}
