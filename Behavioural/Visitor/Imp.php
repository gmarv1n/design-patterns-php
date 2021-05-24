<?php
/**
 * Behavioural Patterns: Visitor
 * Imp class
 *
 * Имп
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 14.04.2021
 */
namespace DesignPatterns\Behavioural\Visitor;
use DesignPatterns\Behavioural\Visitor\Demon;

class Imp extends Demon
{
    public function __construct()
    {
        $this->demonType = "Imp";
    }

    // Если вы обратили внимание, то Импа
    // Палач Рока разрывает пополам :)
    public function beingTearedApart()
    {
        echo $this->demonType." was teared apart to two pieces!<br>";
    }
    
    public function gloryDeath(GloryKiller $doomSlayer): void
    {
        $doomSlayer->killImp($this);
    }
}