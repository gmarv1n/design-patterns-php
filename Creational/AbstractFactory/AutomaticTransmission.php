<?php
/**
 * Creational Patterns: Abstract Factory
 * AutomaticTransmission class
 *
 * Коробка-автомат
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 01.04.2021
 */
namespace DesignPatterns\Creational\AbstractFactory;
use DesignPatterns\Creational\AbstractFactory\Transmission;

class AutomaticTransmission implements Transmission
{
    protected $transmissionType = "Atomatic";
    
    public function getTransmissionType(): string
    {
        return $this->transmissionType;
    }
}