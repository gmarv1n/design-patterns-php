<?php
/**
 * Structural Patterns: Bridge
 * Mike class
 *
 * Водитель - Майк, не самый к слову
 * хороший водитель
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 12.04.2021
 */
namespace DesignPatterns\Structural\Bridge;
use DesignPatterns\Structural\Bridge\Driver;

class Mike implements Driver
{
    private $name = "Mike";

    public function startEngine(): void
    {
       echo "Vrrum-vrrum.<br>";
    }

    public function startDriving(): void
    {
        echo "Oh god I don't know what to do!<br>";
    }

    public function crash(): void
    {
        echo "Yep, got what expected...<br>";
    }

    public function getName(): string {
        return $this->name;
    }
}