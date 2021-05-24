<?php
/**
 * Behavioural Patterns: State
 * Water class
 *
 * Родительский абстратный класс воды,
 * реализующий интерфейс WaterState
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 13.04.2021
 */
namespace DesignPatterns\Behavioural\State;
use DesignPatterns\Behavioural\State\WaterState;
use DesignPatterns\Behavioural\State\kettle;

abstract class Water implements WaterState
{
    // У воды есть температура 
    // и чайник, в котором она находится
    protected $waterTemp;
    protected $kettle;

    public function __construct(Kettle $kettle)
    {
        $this->kettle = $kettle;
    }

    public function getTemp()
    {
        return $this->waterTemp;
    }

    abstract public function reactToBoiling(): void;
}