<?php
/**
 * Structural Patterns: Flyweight
 * CertainCar class
 *
 * Конкретная машина
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 12.04.2021
 */
namespace DesignPatterns\Structural\Flyweight;
use DesignPatterns\Structural\Flyweight\CarVariation;

class CertainCar
{
    // У конкретной машины будет свой собственный владелец,
    // производитель и вариация цвет/кузов/трансмиссия, которые
    // могут и будут повторяться
    public $owner;
    public $manufacturer;

    private $carVariation;

    public function __construct($owner, $manufacturer, CarVariation $carVariation)
    {
        $this->owner = $owner;
        $this->manufacturer = $manufacturer;
        $this->carVariation = $carVariation;
    }

    // Для описания конкретной машины - вызовем метод
    // описания вариации и передадим в него уникальные имя владельца
    // и производителя
    public function describeCertainCar(): void
    {
        $this->carVariation->describeCarVariant($this->owner, $this->manufacturer);
    }
}