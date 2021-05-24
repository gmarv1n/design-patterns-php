<?php
/**
 * Behavioural Patterns: State
 * WaterState interface
 *
 * Интерфейс состояния воды
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 13.04.2021
 */
namespace DesignPatterns\Behavioural\State;

interface WaterState
{
    public function reactToBoiling(): void;
}