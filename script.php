<?php

abstract class Animal
{
public $food;
public $location;

function __construct($food, $location)
{
$this->food = $food;
$this->location = $location;
}

abstract function make_noise();
abstract function eat();
abstract function sleep();
}
class Cat extends Animal
{
public $color;

function __construct($food, $location, $color)
{
$this->food = $food;
$this->location = $location;
$this->color = $color;
}
function make_noise()
{
echo "<br>"."Кот мяучит";
}
function eat()
{
echo "<br>"."Кот ест";
}
function sleep()
{
echo "<br>"."Кот спит";
}
}
class Dog extends Animal
{
public $type;

function __construct($food, $location, $type)
{
$this->food = $food;
$this->location = $location;
$this->type = $type;
}
function make_noise()
{
echo "<br>"."Собака лает";
}
function eat()
{
echo "<br>"."Собака ест";
}
function sleep()
{
echo "<br>"."Собака спит";
}
}
class Horse extends Animal
{
public $poroda;

function __construct($food, $location, $poroda)
{
$this->food = $food;
$this->location = $location;
$this->poroda = $poroda;
}
function make_noise()
{
echo "<br>"."Лошадь фырчит";
}
function eat()
{
echo "<br>"."Лошадь ест";
}
function sleep()
{
echo "<br>"."Лошадь спит";
}
}
$class = $_POST["class"];
$food = $_POST["food"];
$location = $_POST["location"];
$sign = $_POST["sign"];
if($class == 'Cat')
{
$object = new Cat($food, $location, $sign);
echo "Объект - Кот";
echo "<br>".$object->food;
echo "<br>".$object->location;
echo "<br>".$object->color;
}
if($class == 'Dog')
{
$object = new Dog($food, $location, $sign);
echo "Объект - Собака";
echo "<br>".$object->food;
echo "<br>".$object->location;
echo "<br>".$object->type;
}
if($class == 'Horse')
{
$object = new Horse($food, $location, $sign);
echo "Объект - Лошадь";
echo "<br>".$object->food;
echo "<br>".$object->location;
echo "<br>".$object->poroda;
}
if($class != 'Cat' && $class != 'Dog' && $class != 'Horse')
{
$object = new Cat($food, $location, $sign);
}



$object->make_noise();
$object->eat();
$object->sleep();

?>