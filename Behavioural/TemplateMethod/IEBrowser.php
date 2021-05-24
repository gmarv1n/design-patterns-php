<?php
/**
 * Behavioural Patterns: Template Method
 * IEBrowser class
 *
 * Internet Explorer был условным монополистом,
 * до появления альтернатив. Замашки монополиста
 * никуда не делись, поэтому и качество "на уровне"
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 14.04.2021
 */
namespace DesignPatterns\Behavioural\TemplateMethod;
use DesignPatterns\Behavioural\TemplateMethod\WebBrowser;

class IEBrowser extends WebBrowser
{
    public function __construct()
    {
        $this->browserName = "Internet Explorer";
    }

    protected function openSomeSite(): void
    {
        echo $this->getName()." opens site slooowly and distructing....<br>";
    }

    protected function showLayout(): void
    {
        echo $this->getName()." shows incredibly poor CSS's and layout at all...<br>";
    }

    // В Интернет Эксплорере перегрузим hook()!
    // для того чтобы еще больше негативу на него
    // нагнать :)
    protected function hook(): void
    {
        echo $this->getName()." asking me for things I don't want and slowing down my computer....<br>";
    }
}