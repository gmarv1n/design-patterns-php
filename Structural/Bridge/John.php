<?php
/**
 * Structural Patterns: Bridge
 * John class
 *
 * Водитель - Джон, со своим особым отношением
 * к вождение
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 12.04.2021
 */
namespace DesignPatterns\Structural\Bridge;
use DesignPatterns\Structural\Bridge\Driver;

class John implements Driver
{
    private $name = "John";

    public function startEngine(): void
    {
       echo "Bubububububububu.<br>";
    }

    public function startDriving(): void
    {
        echo "Clutch - 1st - accelerate<br>";
    }

    public function crash(): void
    {
        echo "Impossible.<br>";
    }

    public function getName(): string {
        return $this->name;
    }
}