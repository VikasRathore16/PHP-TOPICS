<?php

namespace App\MagicClasses;

class MagicClass
{
    public $resourceM;
    public $arrayM;
    public $details = [];
    public function __construct()
    {
        $this->resourceM = 'sdfa';
        $this->arrayM = array(1, 2, 3, 4); // Enter code here
    }

    public function __toString()
    {
        return "Magic String Method <br>";
    }
    public function __invoke($x)
    {
        var_dump($x . "The __invoke() method is called when a script tries to call an object as a function.<br>");
    }
    public function __sleep()
    {
        return array('arrayM');
    }

    public function __wakeup()
    {
        $this->resourceM = 'sdfa';
    }

    public function __call($name, $args)
    {
        if (substr($name, 0, 3) == 'set') {
            $this->__set(substr($name, 3), $args[0]);
        }

        if (substr($name, 0, 3) == 'get') {
            return $this->__get(substr($name, 3));
        }

        return [substr($name, 0, 3), $args[0], $this->details];
    }

    public function __set($name, $value)
    {
        $this->details[$name] = $value;
    }
    public function __get($name)
    {
        if (array_key_exists($name, $this->details)) {
            return $this->details[$name];
        }
    }
}
