<?php

class CarThree {
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function moveWheels(){
        $this->wheels = 10;
    }

    function createDoors(){
        $this->doors = 6;
    }
}

$bmw = new CarThree();
$truck = new CarThree();
echo $bmw->wheels . "<br>";

echo $truck->wheels = 10 . "<br>";
$truck->createDoors();
echo $truck->doors;
