<?php
/**
 * Creational Patterns: Abstract Factory
 * Engine interface
 *
 * Интерфейс двигателя: содержит
 * информацию об используемом топливе
 * и максимальном количестве оборотов двигателя
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 01.04.2021
 */
namespace DesignPatterns\Creational\AbstractFactory;

interface Engine
{
    public function getFuelType(): string;
    public function getMaxRPM(): string;
}