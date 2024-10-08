<?php
class Car
{
    public $color;
    public $weight;
}

$myCar=new Car();
$myCar->color='red';
echo $myCar->color;
echo "<br>";
$myCar->weight=500;
echo $myCar->weight;
