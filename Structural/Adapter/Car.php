<?php
/**
 * Structural Patterns: Adapter
 * Car class
 *
 * Класс автомобиля, который реализует интерфейс
 * FourWheelsVehicle для нашего водителя
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 08.04.2021
 */
namespace DesignPatterns\Structural\Adapter;
use DesignPatterns\Structural\Adapter\FourWheelsVehicle;

class Car implements FourWheelsVehicle
{
    // Сложная и непонятная реализация метода интерфейс :)
    public function ride()
    {
        echo "Woohooo Ime riding car!";
    }
}