<?php
/**
 * Structural Patterns: Adapter
 * Driver class
 *
 * Наш нежный водитель, скрупулезно относящийся к тому,
 * передвижению на каком транспорте его принуждают!
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 08.04.2021
 */
namespace DesignPatterns\Structural\Adapter;

class Driver
{
    // Демонстрация того, как транспорт едет
    // А если транспорт не тот, то не едет :)
    public static function showRide($vehicle)
    {
        if ($vehicle instanceof FourWheelsVehicle) {
            $vehicle->ride();
        } else {
            echo "Oh no! You're trying to ride() ".get_class($vehicle).". It doesn't have a ride() method! You need adapter to show how you'r riding this!";
        }
    }
}