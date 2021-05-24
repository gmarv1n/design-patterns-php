<?php
require_once("../../vendor/autoload.php");

use DesignPatterns\Structural\Proxy\ChoppingProxy;
use DesignPatterns\Structural\Proxy\Axe;
use DesignPatterns\Structural\Proxy\Machete;
use DesignPatterns\Structural\Proxy\Chopper;

$bush = "Bush";
$tree = "Tree";
$rope = "Rope";

$chopperMan = new ChoppingProxy();
$axe = new Axe();
$machete = new Machete();

function chopSomething($material, Chopper $chopper)
{
    $chopper->chop($material);
}

chopSomething($bush, $chopperMan);
chopSomething($tree, $chopperMan);
chopSomething($rope, $chopperMan);

chopSomething($rope, $machete);
chopSomething($bush, $axe);