<?php
/**
 * Structural Patterns: Facade
 * CarEngine class
 *
 * Двигатель автомобиля
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 05.04.2021
 */
namespace DesignPatterns\Structural\Facade;
use DesignPatterns\Structural\Facade\CarElectronics;

class CarEngine
{
    private $type;
    // По умолчания топливный насос и катушки 
    // находятся в состоянии покоя :)
    private $isFuelPumpOn = false;
    private $isSparkles = false;

    // В конструкторе задаем двигателю тип
    public function __construct($type)
    {
        $this->type = $type;
    }

    // Старт двигателя будет возможен только при помощи
    // электроники двигателя, которая включит топливный насос
    // и подаст напряжение на катушки зажигания
    public function start(CarElectronics $carElectronics): void
    {
        $carElectronics->prepareEngineStart($this);
        if ($this->isFuelPumpOn && $this->isSparkles) {
            echo "Engine ".$this->type." STARTED.<br>";
        } else {
            echo "Something gone wrong with electronics...<br>";
        }
    }

    public function turnFuelPumpOn(): void
    {
        if (!$this->isFuelPump) {
            $this->isFuelPumpOn = true;
        }
    }

    public function makeSparkles(): void
    {
        if (!$this->isSparkles) {
            $this->isSparkles = true;
        }
    }
}