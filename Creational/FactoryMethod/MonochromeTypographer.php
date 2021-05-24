<?php
/**
 * Creational Patterns: Factory Method
 * MonochromeTypographer class
 *
 * Специалист по чёрно-белой печати,
 * класс - потомок Typographer с реализацией фабричного метода,
 * возвращающей монохромный принтер (матричный, вероятно)
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 25.03.2021
 */
namespace DesignPatterns\Creational\FactoryMethod;
use DesignPatterns\Creational\FactoryMethod\Typographer;
use DesignPatterns\Creational\FactoryMethod\MonochromePrinter;
use DesignPatterns\Creational\FactoryMethod\Printer;

class MonochromeTypographer extends Typographer
{
    // ЧБ печатник подготоваливает черно-белый принтер
    protected function preparePrinter(): Printer
    {
        return new MonochromePrinter();
    }
}