<?php

namespace DesignPatterns\Structural\Adapter;

/**
 * 这里是适配过的类. 在生产代码中, 这可能是来自另一个包的类，一些供应商提供的代码。
 * 注意它使用了另一种命名方案并用另一种方式实现了类似的操作
 */
class Kindle implements EBookInterface
{
    /**
     * @var int
     */
    private $page = 1;

    /**
     * @var int
     */
    private $totalPages = 100;

    public function pressNext()
    {
        $this->page++;
    }

    public function unlock()
    {
    }

    /**
     * 返回当前页和总页数，像 [10, 100] 是总页数100中的第10页。
     *
     * @return int[]
     */
    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }
}
