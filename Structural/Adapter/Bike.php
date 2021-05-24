<?php
/**
 * Structural Patterns: Adapter
 * Bike class
 *
 * Класс мотоцикла, который нужно "адаптировать"
 * к имеющемуся коду
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 08.04.2021
 */
namespace DesignPatterns\Structural\Adapter;

class Bike
{
    // Можно бы было нагородить байку интерфейс и наверное так и надо будет сделать...
    public function rideBike()
    {
        echo "Woohooo I'me riding bike!";
    }
}