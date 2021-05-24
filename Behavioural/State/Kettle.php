<?php
/**
 * Behavioural Patterns: State
 * Kettle class
 *
 * Чайник
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 13.04.2021
 */
namespace DesignPatterns\Behavioural\State;
use DesignPatterns\Behavioural\State\WaterState;

class Kettle
{
    // У чайника есть состояние - горячая жижа в нем, либо холодная
    private $waterState;

    // Кто наливает в чайник горячую воду?
    // Правильно, практически никто, поэтому
    // инициализируем состояние чайника холодной водой,
    // не забыв передать в ее конструктор сам чайник
    public function __construct()
    {
        $this->waterState = new ColdWater($this);
    }

    // Включение чайника, в зависимости от его состояния приведет
    // или к мгновенному его выключению, или к смене холодного состояния
    // на горячее
    public function turnOn()
    {
        echo "Trying to turn on the kettle...<br>";
        $this->waterState->reactToBoiling();
        echo "The temperature on the ketlle's screen shows: ".$this->waterState->getTemp()." degrees. <br>";
    }

    // Возможно кому-то в голову придет слить из чайника 
    // горячую воду и заменить ее холодной. Или наоборот, 
    // всякое случается
    public function changeWaterState(WaterState $waterState)
    {
        $this->waterState = $waterState;
    }

    // Для того чтобы чайник по естетсвенным причинам остыл,
    // нужно подождать хотя бы 10 минут, чем и займется этот
    // метод. Да, замечание: во вселенной программы, вода
    // остывает на 79 градусов ровно за 10 минут.
    public function waitTenMinutes()
    {
        echo "So we go for a walk for about 10 minutes...<br>";
        $this->waterState = new ColdWater($this);
        echo "Looks like the water is cooler now, the temp is: ".$this->waterState->getTemp()." degrees. <br>";
    }
}