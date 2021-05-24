<?php
/**
 * Behavioural Patterns: Template Method
 * ChromeBrowser class
 *
 * Гугл хром, за редким исключением,
 * всегда был отличным интернет-обозревателем
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 14.04.2021
 */
namespace DesignPatterns\Behavioural\TemplateMethod;
use DesignPatterns\Behavioural\TemplateMethod\WebBrowser;

class ChromeBrowser extends WebBrowser
{
    public function __construct()
    {
        $this->browserName = "Google Chrome";
    }

    protected function openSomeSite(): void
    {
        echo $this->getName()." opens quickly and everything is OK.<br>";
    }

    protected function showLayout(): void
    {
        echo $this->getName()." shows nothing special.<br>";
    }
}