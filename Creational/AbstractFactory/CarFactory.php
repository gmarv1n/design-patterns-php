<?php
/**
 * Creational Patterns: Abstract Factory
 * CarFactory interface
 *
 * Интерфейс нашей обстратной фабрики
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 01.04.2021
 */
namespace DesignPatterns\Creational\AbstractFactory;
use DesignPatterns\Creational\AbstractFactory\FuelTank;
use DesignPatterns\Creational\AbstractFactory\Engine;
use DesignPatterns\Creational\AbstractFactory\Transmission;

interface CarFactory
{
    public function createFuelTank(): FuelTank;
    public function createEngine(): Engine;
    public function createTransmission(): Transmission;
}