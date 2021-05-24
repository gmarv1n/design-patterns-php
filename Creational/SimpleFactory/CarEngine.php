<?php
/**
 * Creational Patterns: Simple Factory
 * CarEngine class
 *
 * Автомобильный двигатель, реализующий
 * интерфейс VehicleEngine
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 30.03.2021
 */
namespace DesignPatterns\Creational\SimpleFactory;
use DesignPatterns\Creational\SimpleFactory\VehicleEngine;

class CarEngine implements VehicleEngine
{
    private $cylindersAmount;
    private $maxRPM;
    private $fuelType;

    public function __toString()
    {
        return "This is a ".$this->fuelType."engine. Amount of cylinders = ".$this->cylindersAmount."and Maximum RPM = ".$this->maxRPM;
    }
    public function setCylindersAmount(int $cylindersAmount): void
    {
        $this->cylindersAmount = $cylindersAmount;
    }

    public function setMaxRPM(int $maxRPM): void
    {
        $this->maxRPM = $maxRPM;
    }

    public function setFuelType(string $fuelType): void
    {
        $this->fuelType = $fuelType;
    } 

    public function getCylindersAmount(): int
    {
        return $this->cylindersAmount;
    }

    public function getMaxRPM(): int
    {
        return $this->maxRPM;
    }

    public function getFuelType(): string
    {
        return $this->fuelType;
    }
}