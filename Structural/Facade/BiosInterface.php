<?php

namespace DesignPatterns\Structural\Facade;

/**
 * 创建基础输入输出系统接口类 BiosInterface 。
 */
interface  BiosInterface
{
    /**
     * 声明执行方法。
     */
    public function execute();

    /**
     * 声明等待密码输入方法
     */
    public function waitForKeyPress();

    /**
     * 声明登录方法。
     */
    public function launch(OsInterface $os);

    /**
     * 声明关机方法。
     */
    public function powerDown();
}
