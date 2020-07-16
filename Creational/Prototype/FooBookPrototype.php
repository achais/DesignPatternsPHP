<?php

namespace DesignPatterns\Creational\Prototype;

class FooBookPrototype extends BookPrototype
{
    protected $name;

    protected $category = 'Foo';

    public function __construct()
    {
        $this->name = 'achais';
        $this->name = substr($this->name, 0, 5);
        $this->name = strrev($this->name);
    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}