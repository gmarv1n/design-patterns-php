<?php
/**
 * Creational Patterns: Simple Factory
 * CarEngineFactory class
 *
 * Простая фабрика для создания двигателей
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 30.03.2021
 */
namespace DesignPatterns\Creational\SimpleFactory;
use DesignPatterns\Creational\SimpleFactory\CarEngine;
use DesignPatterns\Creational\SimpleFactory\VehicleEngine;

class CarEngineFactory
{
    // Фабрика, в зависимости от переданного параметра, производит
    // или дизельный или бензиновый двигатель. Клиенту же, нет необходимости
    // разбираться в том, какое количество цилиндров и максимальное количество
    // оборотов у выбранного типа двигателя

    public function makeCarEngine(string $type): VehicleEngine
    {
        // Создаем собственно дрыгатель!
        $engine = new CarEngine();
        switch ($type):
            // Если заказчику нужен бензиновый двигатель, делаем шестицилиндровый
            // мотор с максимальным количеством оборотов в минуту в 9000 
            case "GAS":
                $engine->setCylindersAmount(6);
                $engine->setMaxRPM(9000);
                return $engine;
                break;
            // С дизелем все понятно - 4000 потолок и цилиндров всего 4. Куминс, видимо :)
            case "DIESEL":
                $engine->setCylindersAmount(4);
                $engine->setMaxRPM(4000);
                return $engine;
                break;
            // И давайте, на всякий случай, осадим заказчика, если он хочет
            // чего-то, что наша фабрика производить не в состоянии!
            default:
                echo "Incorrect type of engine! Our factory can only make GAS or DIESEL motors!<br>";
        endswitch;
    }
}