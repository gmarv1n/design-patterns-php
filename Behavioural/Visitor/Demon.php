<?php
/**
 * Behavioural Patterns: Visitor
 * Demon class
 *
 * Абстрактный класс демона
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 14.04.2021
 */
namespace DesignPatterns\Behavioural\Visitor;
use DesignPatterns\Behavioural\Visitor\GloryKiller;

abstract class Demon
{
    // У демона есть только название
    // и способ эпично умереть!
    public $demonType;

    // Смерть демона - только от рук
    // Палача Рока!
    abstract public function gloryDeath(GloryKiller $doomSlayer): void;
}