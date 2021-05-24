<?php
require_once("../../vendor/autoload.php");

use DesignPatterns\Structural\Composite\Nail;
use DesignPatterns\Structural\Composite\NailBox;

$nail1 = new Nail(10);
$nail2 = new Nail(25);
$nail3 = new Nail(38);
$nail4 = new Nail(51);
$nailBox1 = new NailBox();
$nailBox1->addItem($nail1);
$nailBox1->addItem($nail2);
$nailBox1->addItem($nail3);
$nailBox2 = new NailBox();
$nailBox2->addItem($nailBox1);
$nailBox2->addItem($nail4);

echo "Total price of nails in nail box 2: ".$nailBox2->getPrice();
echo "Total price of nails in nail box 1: ".$nailBox1->getPrice();
echo "Price of nail 4: ".$nail4->getPrice();