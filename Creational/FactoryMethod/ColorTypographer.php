<?php
/**
 * Creational Patterns: Factory Method
 * ColorTypographer class
 *
 * Специалист по цветной печати,
 * класс - потомок Typographer с реализацией фабричного метода,
 * возвращающей цветной принтер
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 25.03.2021
 */
namespace DesignPatterns\Creational\FactoryMethod;
use DesignPatterns\Creational\FactoryMethod\Typographer;
use DesignPatterns\Creational\FactoryMethod\ColorPrinter;
use DesignPatterns\Creational\FactoryMethod\Printer;

class ColorTypographer extends Typographer
{
    // Печатник подготоваливает цветной принтер
    protected function preparePrinter(): Printer
    {
        return new ColorPrinter();
    }
}