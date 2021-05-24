<?php
/**
 * Creational Patterns: Factory Method
 * ColorPrinter Class
 *
 * Цветной принтер, реализующий интерфейс Printer
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 25.03.2021
 */
namespace DesignPatterns\Creational\FactoryMethod;
use DesignPatterns\Creational\FactoryMethod\Printer;

class ColorPrinter implements Printer
{
    // Цветной принтер, конечно же, печатает 
    // цветное изображение.
    public function print()
    {
        echo "Printing colorfull image... <br>";
    }
}