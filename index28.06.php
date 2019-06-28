<?php
require_once 'Car.php';
require_once 'Bmw.php';
require_once 'Ferrari.php';

$car = new Car();

echo '<pre>';
var_dump($car);

$car->move();

var_dump($car);

$bmw = new Bmw();
var_dump($bmw);


$ferrari = new Ferrari();
var_dump($ferrari);