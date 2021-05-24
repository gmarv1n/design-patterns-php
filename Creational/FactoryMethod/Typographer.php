<?php
/**
 * Creational Patterns: Factory Method
 * Typographer class
 *
 * Суперкласс для реализации фабричного метода
 * его потомками
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 25.03.2021
 */
namespace DesignPatterns\Creational\FactoryMethod;
use DesignPatterns\Creational\FactoryMethod\Printer;

abstract class Typographer
{
    // Абстрактный метод, реализация которого 
    // будет различаться у потомков, возвращает реализацию
    // интерфейса Printer
    abstract protected function preparePrinter(): Printer;

    // Абстрактный печатник сначала подготавливает принтен,
    // затем передает ему команду печатать
    public function printImage(): Void
    {
        $printer = $this->preparePrinter();
        $printer->print();
    }
}