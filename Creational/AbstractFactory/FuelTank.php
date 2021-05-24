<?php
/**
 * Creational Patterns: Abstract Factory
 * FuelTank interface
 *
 * Интерфейс бака для горючего
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 01.04.2021
 */
namespace DesignPatterns\Creational\AbstractFactory;

interface FuelTank
{
    public function getAllowableFuel(): string;
    public function getCapacity(): string;
}