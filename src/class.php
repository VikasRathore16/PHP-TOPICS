<?php
function __autoload($class)
{
    // Adapt this depending on your directory structure
    // echo $class."<br>";
    $parts = explode('\\', $class);
    // print_r($parts);
    // echo "<br>";
    require "./classes/" . end($parts) . '.php';
}


use App\AbstractClasses\Audi;
use App\InterfaceClasses\Cat;
use App\MagicClasses\MagicClass;

echo "<pre>";
$audi = new Audi("Audi");
echo $audi->intro();
echo "<br>";


$animal = new Cat();
$animal->makeSound();
echo "<br>";
$animal->fun();
echo "<br>";
Cat::welcome();

$animal->printFormatted("Hello world", "exclaim");
$animal->printFormatted("Hello world", "ask");

$magic = new MagicClass();
$serializedStr = serialize($magic);
echo "<br>";
// echo $magic;
// echo $magic(2);
// print_r($magic);
echo "<br>";
// print_r($serializedStr);
echo "<br>";
// print_r(unserialize($serializedStr));
echo "<br>";
print_r($magic->setName('Vikas'));
print_r($magic->setAddress('Rid'));
print_r($magic->getAddress('Rid'));
