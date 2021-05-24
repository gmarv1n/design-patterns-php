<?php
/**
 * Creational Patterns: Abstract Factory
 * GasolineCarFactory class
 *
 * Фабрика по производству компонентов для 
 * автомобиля на бензине
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 01.04.2021
 */
namespace DesignPatterns\Creational\AbstractFactory;
use DesignPatterns\Creational\AbstractFactory\CarFactory;
use DesignPatterns\Creational\AbstractFactory\GasFuelTank;
use DesignPatterns\Creational\AbstractFactory\GasEngine;
use DesignPatterns\Creational\AbstractFactory\AutomaticTransmission;

class GasolineCarFactory implements CarFactory
{
    public function createFuelTank(): FuelTank
    {
        return new GasFuelTank();
    }

    public function createEngine(): Engine
    {
        return new GasEngine();   
    }

    public function createTransmission(): Transmission
    {
        return new AutomaticTransmission();
    }
}