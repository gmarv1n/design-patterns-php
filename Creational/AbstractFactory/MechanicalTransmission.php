<?php
/**
 * Creational Patterns: Abstract Factory
 * MechanicalTransmission class
 *
 * Имплементация мехнической коробки передач
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 01.04.2021
 */
namespace DesignPatterns\Creational\AbstractFactory;
use DesignPatterns\Creational\AbstractFactory\Transmission;

class MechanicalTransmission implements Transmission
{
    protected $transmissionType = "Mechanic";
    
    public function getTransmissionType(): string
    {
        return $this->transmissionType;
    }
}