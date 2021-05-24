<?php
/**
 * Creational Patterns: Abstract Factory
 * DieselCarFactory class
 *
 * Фабрика по производству дизельных компонентов
 * для машины
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 01.04.2021
 */
namespace DesignPatterns\Creational\AbstractFactory;
use DesignPatterns\Creational\AbstractFactory\CarFactory;
use DesignPatterns\Creational\AbstractFactory\DieselFuelTank;
use DesignPatterns\Creational\AbstractFactory\DieselEngine;
use DesignPatterns\Creational\AbstractFactory\MechanicalTransmission;

class DieselCarFactory implements CarFactory
{
    public function createFuelTank(): FuelTank
    {
        return new DieselFuelTank();
    }

    public function createEngine(): Engine
    {
        return new DieselEngine();   
    }

    public function createTransmission(): Transmission
    {
        return new MechanicalTransmission();
    }
}