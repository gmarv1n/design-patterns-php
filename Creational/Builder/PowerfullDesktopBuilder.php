<?php
/**
 * Creational Patterns: Builder
 * PowerfullDesktopBuilder class
 *
 * Вариация "Строителя" для сборки мощного компьютера,
 * реализующая интерфейс DesktopBuilder
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 26.03.2021
 */
namespace DesignPatterns\Creational\Builder;
use DesignPatterns\Creational\Builder\DesktopBuilder;
use DesignPatterns\Creational\Builder\DesktopComputer;

class PowerfullDesktopBuilder implements DesktopBuilder
{
    private $computer;

    public function __construct()
    {
        $this->computer = new DesktopComputer();
    }

    // Медот для обнуления "сборки" если нужно собрать еще
    // один компьютер, или что-то пошло не так
    public function resetBuilder(): void
    {
        $this->computer = new DesktopComputer();
    }

    // Для мощного ПК нужен большой и быстрый твердотельный 
    // накопитель
    public function addSSDDrive(): void
    {
        $this->computer->addComponent("Giant SSD with 1TB capacity");
    }

    // Видеокарта, конечно, мощная
    public function addVideoCard(): void
    {
        $this->computer->addComponent("Mining monster RTX8000");
    }

    public function getReadyComputer(): DesktopComputer
    {
        return $this->computer;
        $this->resetBuilder();
    }
}