<?php
/**
 * Creational Patterns: Abstract Factory
 * GasEngine class
 *
 * Имплементация бензинового мотора
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 01.04.2021
 */
namespace DesignPatterns\Creational\AbstractFactory;
use DesignPatterns\Creational\AbstractFactory\Engine;

class GasEngine implements Engine
{
    protected $fuelType;
    protected $maxRPM;

    public function __construct()
    {
        $this->fuelType = "Gasoline";
        $this->maxRPM = "9000";
    }

    public function getFuelType(): string
    {
        return $this->fuelType;
    }

    public function getMaxRPM(): string
    {
        return $this->maxRPM;
    }
}