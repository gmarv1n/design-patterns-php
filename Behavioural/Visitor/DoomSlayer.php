<?php
/**
 * Behavioural Patterns: Visitor
 * DoomSlayer class
 *
 * Великий и ужасный палач рока, "посетитель"
 * демонов, желающих умереть эпично
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 14.04.2021
 */
namespace DesignPatterns\Behavioural\Visitor;
use DesignPatterns\Behavioural\Visitor\Demon;

class DoomSlayer implements GloryKiller
{
    // Какодемона - взрываем
    public function killCacodemon(Cacodemon $cacodemon)
    {
        echo "Doomslayer attack ".$cacodemon->demonType."<br>";
        $cacodemon->beingExplodeByGrenade();
    }

    // Импа - разрываем
    public function killImp(Imp $imp)
    {
        echo "Doomslayer attack ".$imp->demonType."<br>";
        $imp->beingTearedApart();
    }
}