<?php

namespace DesignPatterns\Structural\Decorator;

/**
 * 创建 Json 修饰者并继承抽象类 RendererDecorator 。
 */
class JsonRenderer extends RendererDecorator
{
    /**
     * 对传入的渲染接口对象进行处理，生成 JSON 数据。
     */
    public function renderData(): string
    {
        return json_encode($this->wrapped->renderData());
    }
}
