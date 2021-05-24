<?php
/**
 * Creational Patterns: Abstract Factory
 * CarAssembler class
 *
 * Класс с клиентским кодом для демонстрации работы
 * абстрактной фабрики по производству автомобилей
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 01.04.2021
 */
namespace DesignPatterns\Creational\AbstractFactory;
use DesignPatterns\Creational\AbstractFactory\CarFactory;

class CarAssembler
{
    // Для сборки машины нам потребуется фабрика, которая будет присылать
    // нам компоненты и собственно кузов автомобиля, который будет
    // символизировать ассоциативный массив :)
    private $carFactory;
    private $car = [];

    // В конструкторе принимаем фабрику и присваиваем ее свойству класса
    public function __construct(CarFactory $carFactory)
    {
       $this->carFactory = $carFactory;
    }

    // Собираем автомобиль
    public function assembleCar(): void
    {
        $this->car["Engine"] = $this->carFactory->createEngine();
        $this->car["FuelTank"] = $this->carFactory->createFuelTank();
		$this->car["Transmission"] = $this->carFactory->createTransmission();
    }

    // Описываем собранный автомобиль, если попросят 
    public function describeCar(): void
    {
        echo "So, our car engine is: ".$this->car["Engine"]->getFuelType().", and maximum RPM is: "
        .$this->car["Engine"]->getMaxRPM().". Fuel tank contains ".$this->car["FuelTank"]->getAllowableFuel()
        ." and is ".$this->car["FuelTank"]->getCapacity()." capacity. Also the transmission is ".$this->car["Transmission"]->getTransmissionType().".<br>";
    }

    // И предоставляем автомобиль. Само собой, такая реализация автомобиля в виде массива
    // была создана исключительно в демонстративных целях, пример итак получился большой
    public function provideCar(): array
    {   
        return $this->car;
    }

    // "Обнулаяем" автомобиль для, например, следующего автомобиля
    public function resetCar(): void
    {
        unset($this->car);
    }

    // Сменим компоненты
    public function changeFactory(CarFactory $carFactory): void
    {
        $this->carFactory = $carFactory;
    }
}