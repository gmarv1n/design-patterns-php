<?php
/**
 * Creational Patterns: Factory Method
 * MonochromePrinter Class
 *
 * Черно-белый принтер, реализующий интерфейс Printer
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 25.03.2021
 */
namespace DesignPatterns\Creational\FactoryMethod;
use DesignPatterns\Creational\FactoryMethod\Printer;

class MonochromePrinter implements Printer
{
    // Черно-белый принтер, конечно же, печатает 
    // черно-белое изображение.
    public function print()
    {
        echo "Printing greyscale image... <br>";
    }
}