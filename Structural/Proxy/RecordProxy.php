<?php

namespace DesignPatterns\Structural\Proxy;

class RecordProxy extends Record
{
    /**
     * @var bool
     */
    private $isDirty = false;

    /**
     * @var bool
     */
    private $isInitialized = false;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        parent::__construct($data);
        // 当记录有数据的时候，将 initialized 标记为 true ，
        // 因为记录将保存我们的业务逻辑，我们不希望在 Record 类里面实现这个行为
        // 而是在继承了 Record 的代理类中去实现。
        if (count($data) > 0) {
            $this->isInitialized = true;
            $this->isDirty = true;
        }
    }

    /**
     * @param string $name
     * @param string  $value
     */
    public function __set(string $name, string $value)
    {
        $this->isDirty = true;

        parent::__set($name, $value);
    }

    public function isDirty(): bool
    {
        return $this->isDirty;
    }
}
