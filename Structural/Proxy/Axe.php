<?php
/**
 * Structural Patterns: Proxy
 * Axe class
 * 
 * Топором очень сподручно рубить деревья
 * 
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 09.04.2021
 */
namespace DesignPatterns\Structural\Proxy;
use DesignPatterns\Structural\Proxy\Chopper;

class Axe implements Chopper
{
    public function chop($material): void
    {
        echo "Chop the ".$material." with Axe as a Viking!";
    }
}