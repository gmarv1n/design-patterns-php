<?php
require_once("../../vendor/autoload.php");

use DesignPatterns\Creational\AbstractFactory\CarAssembler;
use DesignPatterns\Creational\AbstractFactory\GasolineCarFactory;
use DesignPatterns\Creational\AbstractFactory\DieselCarFactory;

$carAssembler = new CarAssembler(new GasolineCarFactory());
$carAssembler->assembleCar();
$carAssembler->describeCar();
$carAssembler->resetCar();
$carAssembler->changeFactory(new DieselCarFactory());
$carAssembler->assembleCar();
$carAssembler->describeCar();