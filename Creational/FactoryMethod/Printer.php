<?php
/**
 * Creational Patterns: Factory Method
 * Printer interface
 *
 * Интерфейс для приентера
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 25.03.2021
 */
namespace DesignPatterns\Creational\FactoryMethod;

interface Printer
{
    // В данном примере у принтера один метод - напечатать
    public function print();
}