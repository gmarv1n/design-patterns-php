<?php
require_once("../../vendor/autoload.php");

use DesignPatterns\Structural\Flyweight\CarDataBase;

$carDataBase = new CarDataBase();
$carDataBase->addCar("Vasya", "Mercedes", "Perlamutrovy", "Hatchback", "Manual Transmission");
$carDataBase->addCar("Ksenia", "KIA", "Perlamutrovy", "Hatchback", "Manual Transmission");
$carDataBase->addCar("Vova", "Toyota", "Perlamutrovy", "Hatchback", "Manual Transmission");
$carDataBase->addCar("Kolya", "Subaru", "Dirty", "SUV", "CVT");

$carDataBase->printCertainCars();
$carDataBase->printCarVariations();