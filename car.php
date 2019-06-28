<?php
require_once 'CarInterface.php';

abstract class Car implements CarInterface
{
    protected $speed = 20;
    public $temp = 20;

    abstract public function move();

    public function autopilot()
    {
        $this->speed = 30;
        $this->move();
    }

    public function getCurrentSpeed()
    {
        return $this->speed;
    }
}