<?php


namespace DesignPatterns\Creational\Multiton;


final class Multiton
{
    const INSTANCE_1 = '1';

    const INSTANCE_2 = '2';

    private static $instances = [];

    public function __construct()
    {
    }

    public static function getInstance(string $instanceName): Multiton
    {
        if (!isset(self::$instances[$instanceName])) {
            self::$instances[$instanceName] = new self();
        }

        return self::$instances[$instanceName];
    }

    /**
     * 该私有对象阻止实例被克隆
     */
    private function __clone()
    {
    }

    /**
     * 该私有方法阻止实例被序列化
     */
    private function __wakeup()
    {
    }
}