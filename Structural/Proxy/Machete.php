<?php
/**
 * Structural Patterns: Proxy
 * Machete class
 *
 * Мачете - отличный рубящий инструмент, но
 * для своих целей, само собой
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 09.04.2021
 */

namespace DesignPatterns\Structural\Proxy;
use DesignPatterns\Structural\Proxy\Chopper;

class Machete implements Chopper
{
    public function chop($material): void
    {
        echo "Chop ".$material." with Machete as a Brazil Bandido!";
    }
}