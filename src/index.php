<?php

function myAutoloader($className)
{

    $parts = explode('\\', $className);
    $path =  "classes/" . end($parts) . '.php';
    include $path;
    // include_once str_replace("\\", "/", $class) . ".php";
    // require  './vendor/autoload.php';
}

spl_autoload_register('myAutoloader');

echo "<pre>";
$conn = new Connect();
$student = new App\Models\Student($conn);
$student->setName('Vikasdfas');
$student->setRollNo(17);
$student->setAddress('33, Vishwash Khand, GomtiNagar Lucknow');
echo "<pre>";
echo $student->RollNo;
print_r($student->save());
        // print_r($student->update(10,'name','Vikas'));
        // print_r($student->load(3));
        // print_r($student->delete(10));
// $audi = new Audi("Audi");
// echo $audi->intro();
// echo "<br>";


// $animal = new Cat();
// $animal->makeSound();
// echo "<br>";
// $animal->fun();
// echo "<br>";
// Cat::welcome();

// $animal->printFormatted("Hello world", "exclaim");
// $animal->printFormatted("Hello world", "ask");

// $magic = new MagicClass();
// $serializedStr = serialize($magic);
// echo "<br>";
// echo $magic;
// echo "<br>";
// echo $magic(2);
// echo "<br>";
// print_r($magic);
// echo "<br>";
// print_r($magic->setName('Vikas'));
// print_r($magic->setAddress('Rid'));
// print_r($magic->getAddress('Rid'));
