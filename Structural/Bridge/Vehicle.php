<?php
/**
 * Structural Patterns: Bridge
 * Vehicle class
 *
 * Верховный класс иерархии "абстракций"
 * для нашего примера "Моста"
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 12.04.2021
 */
namespace DesignPatterns\Structural\Bridge;
use DesignPatterns\Structural\Bridge\Driver;

abstract class Vehicle
{
    // В автомобиль мы можем поместить водителя
    protected $driver;

    // Водитель должен быть инициализирован в
    // классе путем аггрегации в конструкторе
    public function __construct(Driver $driver)
    {
        $this->driver = $driver;
    }

    // Добавим возможность сменить водителя, если
    // в его манере езды нас что-то не устроит
    public function changeDriver(Driver $driver): void
    {
        $this->driver = $driver;
    }

    // Реализацию этого метода оставим потомкам
    // (как же пафосно звучит)
    abstract public function drive(): void;
}