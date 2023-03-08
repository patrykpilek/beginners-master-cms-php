<?php

class CarTwo
{
    function moveWheels()
    {
        echo "wheels move";
    }

}

$bmw = new CarTwo();
$merces_benz = new CarTwo();

$bmw->moveWheels() . "<br/>";

$merces_benz->moveWheels() . "<br/>";
