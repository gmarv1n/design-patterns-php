<?php
/**
 * Structural Patterns: Bridge
 * Bike class
 *
 * Мотоцикл, наследним Vehicle
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 12.04.2021
 */
namespace DesignPatterns\Structural\Bridge;
use DesignPatterns\Structural\Bridge\Vehicle;

class Bike extends Vehicle
{
    // Реализация абстрактного метода drive()
    // в случае мотоцикла
    public function drive(): void
    {
        echo $this->driver->getName()." set on Bike.<br>";
        $this->driver->startEngine();
        $this->driver->crash();
    }
}