<?php
/**
 * Creational Patterns: Abstract Factory
 * Transmission interface
 *
 * Интерфейс коробок передач
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 01.04.2021
 */
namespace DesignPatterns\Creational\AbstractFactory;

interface Transmission
{
    public function getTransmissionType(): string;
}