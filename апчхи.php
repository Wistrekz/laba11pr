<?php
if(isset($_POST["cr"]))
{
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
abstract function Eat();
abstract function sleep();
}
class Koshka extends Animal
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
echo "<br>"."meow";
}
function Eat()
{
echo "<br>"."Koshka eating";
}
function sleep()
{
echo "<br>"."Koshka Sleep";
}
}
class sobaka extends Animal
{
public $razmer;

function __construct($food, $location, $razmer)
{
$this->food = $food;
$this->location = $location;
$this->razmer = $razmer;
}
function make_noise()
{
echo "<br>"."bark";
}
function Eat()
{
echo "<br>"."sobaka eating";
}
function sleep()
{
echo "<br>"."sobaka Sleep";
}
}
class loshad extends Animal
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
echo "<br>"."i-go-go";
}
function Eat()
{
echo "<br>"."loshad eating";
}
function sleep()
{
echo "<br>"."loshad Sleep";
}
}
$class = $_POST["class"];
$food = $_POST["food"];
$location = $_POST["location"];
$third = $_POST["third"];
if($class = 'Koshka')
{
$object = new Koshka($food, $location, $third);
echo "<br>".$object->food;
echo "<br>".$object->location;
echo "<br>".$object->color;
}
if($class = 'sobaka')
{
$object = new sobaka($food, $location, $third);
echo "<br>".$object->food;
echo "<br>".$object->location;
echo "<br>".$object->razmer;
}
if($class = 'loshad')
{
$object = new loshad($food, $location, $third);
echo "<br>".$object->food;
echo "<br>".$object->location;
echo "<br>".$object->poroda;
}
if($class != 'sobaka' || $class != 'loshad' || $class != 'Koshka')
{
$object = new Koshka($food, $location, $third);
}



$object->make_noise();
$object->Eat();
$object->sleep();
}
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<form method="post">
<input type="text" name="class">
<input type="text" name="food">
<input type="text" name="location">
<input type="text" name="third">
<input type="submit" name="cr">
</form>
</body>
</html>