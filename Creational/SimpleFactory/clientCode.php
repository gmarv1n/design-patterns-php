<?php
require_once("../../vendor/autoload.php");

use DesignPatterns\Creational\SimpleFactory\CarEngineFactory;

$carEngineFactory = new CarEngineFactory();
$dieselMotor = $carEngineFactory->makeCarEngine("DIESEL");
$gasMotor = $carEngineFactory->makeCarEngine("GAS");
echo $dieselMotor;
echo $gasMotor;