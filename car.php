<?php
require_once 'CarInterface.php';

abstract class Car implements CarInterface
{
    public $speed = 20;
    public $temp = 20;

    abstract public function move();
}