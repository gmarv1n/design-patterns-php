<?php
require_once("../../vendor/autoload.php");

use DesignPatterns\Creational\Prototype\Prototype;

$firstPrototype = new Prototype("Object One", 5);
$clonedPrototype = clone $firstPrototype;
echo $firstPrototype;
echo $firstPrototype;