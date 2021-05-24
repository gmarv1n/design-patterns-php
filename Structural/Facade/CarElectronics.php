<?php
/**
 * Structural Patterns: Facade
 * CarElectronics class
 *
 * Электроника автомобиля
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 05.04.2021
 */
namespace DesignPatterns\Structural\Facade;
use DesignPatterns\Structural\Facade\CarEngine;

class CarElectronics
{
    private $type;

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function getAllSystemsOn(): void
    {
        echo "All electric systems of ".$this->type." turned ON<br>";
    }

    // Метод подготавливает запускаемый двигатель, т.е. включает
    // топливный насос и подает напряжение на катушках
    public function prepareEngineStart(CarEngine $carEngine): void
    {
        $carEngine->turnFuelPumpOn();
        $carEngine->makeSparkles();
    }
}