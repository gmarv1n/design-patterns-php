<?php
/**
 * Creational Patterns: Abstract Factory
 * DieselEngine class
 *
 * Имплементация интерфейса Engine для
 * дизельного мотора
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 01.04.2021
 */
namespace DesignPatterns\Creational\AbstractFactory;
use DesignPatterns\Creational\AbstractFactory\Engine;

class DieselEngine implements Engine
{
    protected $fuelType;
    protected $maxRPM;

    public function __construct()
    {
        $this->fuelType = "Diesel";
        $this->maxRPM = "4000";
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