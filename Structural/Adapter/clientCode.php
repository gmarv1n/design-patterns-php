<?php
require_once("../../vendor/autoload.php");

use DesignPatterns\Structural\Adapter\Driver;
use DesignPatterns\Structural\Adapter\Bike;
use DesignPatterns\Structural\Adapter\Car;
use DesignPatterns\Structural\Adapter\BikeAdapter;

$riderJoe = new Driver();
$bike = new Bike();
$car = new Car();
$bikeAdapter = new BikeAdapter($bike);
$riderJoe->showRide($car);

$riderJoe->showRide($bike);

$riderJoe->showRide($bikeAdapter);