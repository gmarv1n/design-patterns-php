<?php
require_once("../../vendor/autoload.php");

use DesignPatterns\Creational\FactoryMethod\MonochromeTypographer;
use DesignPatterns\Creational\FactoryMethod\ColorTypographer;

$typographyTaskList = [];
array_push($typographyTaskList, new MonochromeTypographer());
array_push($typographyTaskList, new ColorTypographer());
array_push($typographyTaskList, new ColorTypographer());

foreach($typographyTaskList as $employee) {
    $employee->printImage();
}