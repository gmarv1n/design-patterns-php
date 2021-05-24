<?php
require_once("../../vendor/autoload.php");

use DesignPatterns\Behavioural\State\Kettle;

$kettle = new Kettle();
$kettle->turnOn();

$kettle->turnOn();

$kettle->waitTenMinutes();