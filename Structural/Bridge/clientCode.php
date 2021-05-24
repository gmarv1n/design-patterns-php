<?php
require_once("../../vendor/autoload.php");

use DesignPatterns\Structural\Bridge\John;
use DesignPatterns\Structural\Bridge\Mike;
use DesignPatterns\Structural\Bridge\Bike;
use DesignPatterns\Structural\Bridge\Car;
use DesignPatterns\Structural\Bridge\Vehicle;

$driverJohn = new John();
$driverMike = new Mike();
$bike = new Bike($driverJohn);
$car = new Car($driverMike);

function exploreBridgeDriving(Vehicle $vehicle)
{
    $vehicle->drive();
}

exploreBridgeDriving($bike);
exploreBridgeDriving($car);

$car->changeDriver($driverJohn);

exploreBridgeDriving($bike);
exploreBridgeDriving($car);