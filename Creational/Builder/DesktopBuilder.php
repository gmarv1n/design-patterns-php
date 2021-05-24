<?php
/**
 * Creational Patterns: Builder
 * DesktopBuilder interface
 *
 * Интерфейс сборщика компьютера, собственно
 * "Строителя"
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 26.03.2021
 */
namespace DesignPatterns\Creational\Builder;
use DesignPatterns\Creational\Builder\DesktopComputer;

interface DesktopBuilder
{
    // Метод для "обнуления" строителя
    public function resetBuilder(): void;
    // Добавляем видеокарту
    public function addVideoCard(): void;
    // Твердотельный накопитель
    public function addSSDDrive(): void;
    // Отдаем готовый ПК на выдачу
    public function getReadyComputer(): DesktopComputer;
}