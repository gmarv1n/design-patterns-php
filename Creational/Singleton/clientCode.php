<?php
require_once("../../vendor/autoload.php");

use DesignPatterns\Creational\Singleton\Singleton;
use DesignPatterns\Creational\Singleton\SingletonChild;

$singleton = Singleton::getInstance();
$singletonChild = SingletonChild::getInstance();
$singleton->printName();
$singleton->singletonLogic();
$singletonChild->printName();
$singletonChild->singletonLogic();

unset($singleton);
unset($singletonChild);
$singleton = Singleton::getSingleInstance();
$singletonChild = SingletonChild::getSingleInstance();
$singleton->printName();
$singleton->singletonLogic();
$singletonChild->printName();
$singletonChild->singletonLogic();