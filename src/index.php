<?php
require('./vendor/autoload.php');

use App\Models\Student;
use App\Models\Teacher;

$mongo = new MongoDB\Client("mongodb+srv://cluster0.gbzl3.mongodb.net/myFirstDatabase", array("username" => 'root', "password" => "Vikas@1998"));

$student = new Student($mongo);
$student->setRollNo(11);
$student->setName('Hello');
$student->setAddress('33, Vishwash Khnd, GomtiNagar Lucknow');
echo "<pre>";
// print_r($student->getName());
print_r($student->save());
// print_r($student->update());
// print_r($student->load(3));
// print_r($student->delete());


$teacher = new Teacher($mongo);
$teacher->setId(11);
$teacher->setName('Sir');
$teacher->setAddress('33, Vishwash Khnd, GomtiNagar Lucknow');
echo "<pre>";
// print_r($teacher->getName());
print_r($teacher->save());
// print_r($teacher->update());
// print_r($teacher->load(3));
// print_r($teacher->delete());














