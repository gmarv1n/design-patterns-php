<?php
require_once("../../vendor/autoload.php");

use DesignPatterns\Creational\Builder\DesktopAssembler;

$simplePC = DesktopAssembler::assembleSimpleDesktop();
$simplePC->getDescription();

$powerfullPC = DesktopAssembler::assemblePowerfullDesktop();
$powerfullPC->getDescription();