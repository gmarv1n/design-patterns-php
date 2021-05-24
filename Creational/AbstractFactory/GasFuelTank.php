<?php
/**
 * Creational Patterns: Abstract Factory
 * GasFuelTank class
 *
 * Имплементация бензобака с... бензином!
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 01.04.2021
 */
namespace DesignPatterns\Creational\AbstractFactory;
use DesignPatterns\Creational\AbstractFactory\FuelTank;

class GasFuelTank implements FuelTank
{
    protected $allowableFuel;
    protected $capacity;

    public function __construct()
    {
        $this->allowableFuel = "Gasoline fuel";
        $this->capacity = "50 litres";
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