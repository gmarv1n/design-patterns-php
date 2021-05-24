<?php
/**
 * Structural Patterns: Bridge
 * Car class
 *
 * Автомобиль, наследник Vehicle
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 12.04.2021
 */
namespace DesignPatterns\Structural\Bridge;
use DesignPatterns\Structural\Bridge\Vehicle;

class Car extends Vehicle
{
    // Реализация абстрактного метода drive()
    // в случае автомобиля
    public function drive(): void
    {
        echo $this->driver->getName()." set in car.<br>";
        $this->driver->startEngine();
        $this->driver->startDriving();
    }
}