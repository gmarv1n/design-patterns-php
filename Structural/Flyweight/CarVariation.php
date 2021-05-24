<?php
/**
 * Structural Patterns: Flyweight
 * CarVariation class
 *
 * Класс с повторяющимися свойствами автомобиля
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 12.04.2021
 */
namespace DesignPatterns\Structural\Flyweight;

class CarVariation
{
    // Повторяющимися, в нашем примере, будут
    // цвет, тип кузова и тип коробки передач
    public $color;
    public $bodyType;
    public $transmissionType;

    public function __construct($color, $bodyType, $transmissionType)
    {
        $this->color = $color;
        $this->bodyType = $bodyType;
        $this->transmissionType = $transmissionType;
    }

    // Функция дл описания частей автомобиля с поправкой на то,
    // что вариация - часть целого. Соответственно в виде аргументов
    // нужно передать владельца и производителя
    public function describeCarVariant($owner, $manufacturer): void
    {
        echo "Owner is: ".$owner."<br>";
        echo "Manufacturer is: ".$manufacturer."<br>";
        echo "Color is: ".$this->color."<br>";
        echo "Body type is: ".$this->bodyType."<br>";
        echo "Drive type is: ".$this->transmissionType."<br>";
    }
}