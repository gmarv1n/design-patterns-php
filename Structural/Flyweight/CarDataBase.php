<?php
/**
 * Structural Patterns: Flyweight
 * CertainCar class
 *
 * "База данных" автомобилей
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 12.04.2021
 */
namespace DesignPatterns\Structural\Flyweight;
use DesignPatterns\Structural\Flyweight\CarVariation;
use DesignPatterns\Structural\Flyweight\CertainCar;

class CarDataBase
{
    // Два массива: один с вариациями, второй
    // непосредственно с "готовыми" машинами
    private $carVariations = [];
    private $certainCars = [];

    // Для добавления машины в базу, нам необходимо
    // передать в аргументах владельца, производителя,
    // цвет, тип кузова и трансмисии
    public function addCar(
        $owner,
        $manufacturer,
        $color,
        $bodyType,
        $transmissionType)
    {
        // Первым делом проверяем - не добавили ли мы такую же враиацию ранее
        // и если ответ положительный, то в переменной сохраняем ссылку на созданную
        // вариацию, в противно случае - создаем новую
        $carVariation = $this->getCarVariation($color, $bodyType, $transmissionType);
        if ($carVariation === null) {
            $carVariation = new CarVariation($color, $bodyType, $transmissionType);
            $this->carVariations[] = $carVariation;
        }
        // Создаем и пишем в "базу" конкретную машину
        $this->certainCars[] = new CertainCar($owner, $manufacturer, $carVariation);
    }

    // Метод проверяет - есть ли в "базе" вариаций совпадения
    private function getCarVariation($color, $bodyType, $transmissionType): ?CarVariation
    {
        for ( $i = 0; $i < sizeof($this->carVariations); $i++ ) {
            if ($this->carVariations[$i]->color == $color && $this->carVariations[$i]->bodyType == $bodyType
                && $this->carVariations[$i]->transmissionType == $transmissionType) {
                    return $this->carVariations[$i];
                }
        }
        return null;
    }

    // Выведем список конкретных автомобилей и их описаний
    public function printCertainCars()
    {
        echo "<b>Certain Cars:</b><br><br>";
        for( $i = 0; $i < sizeof($this->certainCars); $i++) {
            $this->certainCars[$i]->describeCertainCar();
            echo "<br>";
        }
        echo "<br>";
    }

    // И посмотрим на вариации - будет ли их меньше :)
    public function printCarVariations() {
        echo "<b>Car Variants:</b><br><br>";
        for( $i = 0; $i < sizeof($this->carVariations); $i++ ) {
            $this->carVariations[$i]->describeCarVariant("No owner", "No manufacturer");
            echo "<br>";
        }
        echo "<br>";
    }
}