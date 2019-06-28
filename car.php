Car.php

<?php

class Car
{
    public $brand = "BMW";
    public $speed = 20;
    public $temp = 20;

    public function move()
    {
        $this->temp += 5;
    }
}