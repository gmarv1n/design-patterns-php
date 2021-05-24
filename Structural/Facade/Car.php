<?php
/**
 * Structural Patterns: Facade
 * Car class
 *
 * Собственно "фасад" автомобиля, методы которого
 * абстрагированы от сложности внутренного устройства классов
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 05.04.2021
 */
namespace DesignPatterns\Structural\Facade;
use DesignPatterns\Structural\Facade\CarElectronics;
use DesignPatterns\Structural\Facade\CarEngine;

class Car
{
    private $carElectronics;
    private $carEngine;
    
    // В конструкторе есть выбор: передалть ли созданные ранее двигатель
    // и электронику, либо вместе с объектом создать стандартные
    public function __construct(
        CarElectronics $carElectronics = null, 
        CarEngine $carEngine = null)
    {
        $this->carElectronics = $carElectronics ?: new CarElectronics("Default car electronics");
        $this->carEngine = $carEngine ?: new CarEngine("Default car engine");
    }

    // Для запуска двигателя клиенту необходимо будет вызвать
    // всего один метод, все остальное произойдет "под капотом"
    public function startTheCar(): void
    {
        $this->carElectronics->getAllSystemsOn();
        $this->carEngine->start($this->carElectronics);
    }
}