<?php
/**
 * Behavioural Patterns: Template Method
 * WebBrowser class
 *
 * Абстрактный класс веб браузера
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 14.04.2021
 */
namespace DesignPatterns\Behavioural\TemplateMethod;

abstract class WebBrowser
{
    protected $browserName;

    // В конструкторе будем жестко фиксировать
    // имя бразуера, который мы запустили
    protected function getName(): string
    {
        return $this->browserName;
    }

    // Наш основной алгоритм
    final public function surf(): void
    {
        $this->openBrowser();
        $this->openSomeSite();
        $this->showLayout();
        $this->closeBrowser();
        $this->hook();
    }

    // Открытие браузера, в целом, ни чем не примечательно
    protected function openBrowser(): void
    {
        echo $this->getName()." browser has started.<br>";
    }

    // А вот на этапе открытия сайтов могут быть сюрпризы
    protected abstract function openSomeSite(): void;

    // Сюрпризы могут быть и в отображении
    protected abstract function showLayout(): void;

    // Закрытие браузера так же вряд ли будет вызвывать 
    // серьезные проблемы
    protected function closeBrowser(): void
    {
        echo $this->getName()." browser closed.<br>";
    }

    // Хотя и закрытие может вызвать проблемы
    protected function hook(): void { 
        //
    }
}