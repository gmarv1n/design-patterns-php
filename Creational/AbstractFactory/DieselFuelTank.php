<?php
/**
 * Creational Patterns: Abstract Factory
 * DieselFuelTank class
 *
 * Имплементация дизельного бака для горючего
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 01.04.2021
 */
namespace DesignPatterns\Creational\AbstractFactory;
use DesignPatterns\Creational\AbstractFactory\FuelTank;

class DieselFuelTank implements FuelTank
{
    protected $allowableFuel;
    protected $capacity;

    public function __construct()
    {
        $this->allowableFuel = "Diesel fuel";
        $this->capacity = "70 litres";
    }

    public function getAllowableFuel(): string
    {
        return $this->allowableFuel;
    }

    public function getCapacity(): string
    {
        return $this->capacity;
    }
}