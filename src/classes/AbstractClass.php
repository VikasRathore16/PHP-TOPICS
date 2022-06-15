<?php

// namespace App\AbstractClasses;

abstract class AbstractClass
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    abstract public function intro(): string;
}
