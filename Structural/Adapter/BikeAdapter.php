<?php
/**
 * Structural Patterns: Adapter
 * BikeAdapter class
 *
 * Герой нашего эпоса - класс, адаптирующий несовместимый
 * Bike под потребности клиента!
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 08.04.2021
 */
namespace DesignPatterns\Structural\Adapter;
use DesignPatterns\Structural\Adapter\Rideable;

class BikeAdapter implements FourWheelsVehicle
{
    private $bike;

    public function __construct(Bike $bike)
    {
        $this->bike = $bike;
    }
    
    public function ride()
    {
        $this->bike->rideBike();
    }
}