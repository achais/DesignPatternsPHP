<?php

namespace DesignPatterns\Behavioral\NullObject;

/**
 * 创建服务类 Service 。
 */
class Service
{
    /**
     * @var LoggerInterface
     * 定义日记类对象。
     */
    private $logger;

    /**
     * @param LoggerInterface $logger
     * 传入日记类对象参数。
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * 做些什么。。。
     * 在日记中返回了 '我们在 Service: doSomething 里' 。
     */
    public function doSomething()
    {
        // 提示：这里你只是使用它，而不需要通过如：is_null() 检查 $logger 是否已经设置。
        $this->logger->log('We are in ' . __METHOD__);
    }
}