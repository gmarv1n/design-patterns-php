<?php
/**
 * Creational Patterns: Simple Factory
 * VehicleEngine interface
 *
 * Интерфейс двигателя
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 30.03.2021
 */
namespace DesignPatterns\Creational\SimpleFactory;

interface VehicleEngine
{
    public function setCylindersAmount(int $cylindersAmount): void;
    public function setMaxRPM(int $maxRPM): void;
    public function setFuelType(string $fuelType): void;
}