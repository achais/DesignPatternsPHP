<?php

namespace DesignPatterns\Structural\Composite;

/**
 * 该组合内的节点必须派生于该组件契约。为了构建成一个组件树，
 * 此为强制性操作。
 */
class Form implements RenderableInterface
{
    /**
     * @var RenderableInterface[]
     */
    private $elements;

    /**
     * 遍历所有元素，并对他们调用 render() 方法，然后返回表单的完整
     * 的解析表达。
     *
     * 从外部上看，我们不会看到遍历过程，该表单的操作过程与单一对
     * 象实例一样
     *
     * @return string
     */
    public function render(): string
    {
        $formCode = '<form>';

        foreach ($this->elements as $element) {
            $formCode .= $element->render();
        }

        $formCode .= '</form>';

        return $formCode;
    }

    /**
     * @param RenderableInterface $element
     */
    public function addElement(RenderableInterface $element)
    {
        $this->elements[] = $element;
    }
}
