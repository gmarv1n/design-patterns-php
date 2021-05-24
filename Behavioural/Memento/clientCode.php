<?php
require_once("../../vendor/autoload.php");

use DesignPatterns\Behavioural\Memento\SomeString;
use DesignPatterns\Behavioural\Memento\SomeStringCarrier;

$someString = new SomeString("Initial string!");
$someStringCarrier = new SomeStringCarrier($someString);
$someStringCarrier->undo();

$someStringCarrier->changeString("Changed string!!");
$someStringCarrier->undo();
echo $someString->getString();