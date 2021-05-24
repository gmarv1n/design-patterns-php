<?php
/**
 * Behavioural Patterns: State
 * ColdWater class
 *
 * Холодная вода
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 13.04.2021
 */
namespace DesignPatterns\Behavioural\State;
use DesignPatterns\Behavioural\State\Water;

class ColdWater extends Water
{
    // Устанавливаем температуру 21 градус, считаю
    // это достаточно холодная
    public function __construct(Kettle $kettle)
    {
        parent::__construct($kettle);
        $this->waterTemp = 21;
    }

    // Холодная вода будет реагировать на нагревание бурлением,
    // а по истечении 5 минут кипения, сменит "состояние" чайника
    // на горярчую воду
    public function reactToBoiling(): void
    {
        echo "The water starts to boil, cause the temp is ".$this->waterTemp." degrees. So we wait for about 5 minutes and...<br>";
        $this->kettle->changeWaterState(new HotWater($this->kettle));
    }
}