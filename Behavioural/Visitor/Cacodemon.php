<?php
/**
 * Behavioural Patterns: Visitor
 * Cacodemon class
 *
 * Какодемон - летающий мясной шар,
 * плюющийся какой-то дрянью
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 14.04.2021
 */
namespace DesignPatterns\Behavioural\Visitor;
use DesignPatterns\Behavioural\Visitor\Demon;

class Cacodemon extends Demon
{
    public function __construct()
    {
        $this->demonType = "Cacodemon";
    }

    // Какодемон умирает именно так!
    public function beingExplodeByGrenade()
    {
        echo $this->demonType." swallowed the grenade and explode!<br>";
    }
    
    public function gloryDeath(GloryKiller $doomSlayer): void
    {
        $doomSlayer->killCacodemon($this);
    }
}