<?php

class Car {

    static $wheels = 4;
    var $hood = 1;

    static function moveWheels(){
        Car::$wheels = 10;
    }
}

$bmw = new Car();

//$bmw->wheels;

Car::moveWheels();

echo Car::$wheels;
