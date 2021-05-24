<?php
/**
 * Creational Patterns: Builder
 * SimpleDesktopBuilder class
 *
 * Вариация "Строителя" для сборки простенького компьютера,
 * реализующая интерфейс DesktopBuilder
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 26.03.2021
 */
namespace DesignPatterns\Creational\Builder;
use DesignPatterns\Creational\Builder\DesktopBuilder;
use DesignPatterns\Creational\Builder\DesktopComputer;

class SimpleDesktopBuilder implements DesktopBuilder
{
    private $computer;

    public function __construct()
    {
        $this->computer = new DesktopComputer();
    }

    public function resetBuilder(): void
    {
        $this->computer = new DesktopComputer();
    }

    // Для простенького ПК достаточно и 120гб SSD
    // чисто для системы
    public function addSSDDrive(): void
    {
        $this->computer->addComponent("Small SSD with 120gb capacity");
    }

    // И обычной видеокарточки
    public function addVideoCard(): void
    {
        $this->computer->addComponent("Simple 1gb radeon VideoCard");
    }

    public function getReadyComputer(): DesktopComputer
    {
        return $this->computer;
        $this->resetBuilder();
    }
}