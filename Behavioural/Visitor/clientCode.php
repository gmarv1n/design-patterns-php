<?php
require_once("../../vendor/autoload.php");

use DesignPatterns\Behavioural\Visitor\GloryKiller;
use DesignPatterns\Behavioural\Visitor\Demon;
use DesignPatterns\Behavioural\Visitor\Cacodemon;
use DesignPatterns\Behavioural\Visitor\DoomSlayer;
use DesignPatterns\Behavioural\Visitor\Imp;

function killEmAll(GloryKiller $killer, Demon $demon)
{
    $demon->gloryDeath($killer);
}

$imp = new Imp();
$cacodemon = new Cacodemon();
$doomSlayer = new DoomSlayer();

killEmAll($doomSlayer, $cacodemon);
killEmAll($doomSlayer, $imp);