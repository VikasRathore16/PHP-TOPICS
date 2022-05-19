<?php

namespace App\InterfaceClasses;

use App\InterfaceClasses\InterfaceClass;

use App\traitClasses\traitClass;

class Cat implements InterfaceClass
{
    public function __construct()
    {
        self::welcome();
    }
    public function makeSound()
    {
        echo "Meow";
    }

    function exclaim($str)
    {
        return $str . "! Call Back <br>";
    }

    function ask($str)
    {
        return $str . "? Call Back <br>";
    }

    function printFormatted($str, $format)
    {
        // Calling the $format callback function
        echo $this->$format($str);
    }

    public static function welcome()
    {
        echo "Hello World! Static Method<br>";
    }
    use traitClass;
}
