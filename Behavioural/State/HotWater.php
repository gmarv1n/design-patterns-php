<?php
/**
 * Behavioural Patterns: State
 * HotWater class
 *
 * 
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 13.04.2021
 */
namespace DesignPatterns\Behavioural\State;
use DesignPatterns\Behavioural\State\Water;

class HotWater extends Water
{
    // Установим температуру горячей воды в 100
    // градусов. Понятно, что и 95 градусов тоже весьма
    // не прохладно, но мне видней :)
    public function __construct(Kettle $kettle)
    {
        parent::__construct($kettle);
        $this->waterTemp = 100;
    }

    // Реакция на кипячение горячей воды - привычная,
    // она вырубит чайник мгновенно
    public function reactToBoiling(): void
    {
        echo "Water is ".$this->waterTemp." degrees. Temp cause the kettle to turn off instantly. Wait for a half of an hour or something...<br>";
    }
}