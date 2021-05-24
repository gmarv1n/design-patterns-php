<?php
/**
 * Behavioural Patterns: Strategy
 * TextRenderer class
 *
 * Визуализатор текста
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 14.04.2021
 */
namespace DesignPatterns\Behavioural\Strategy;
use DesignPatterns\Behavioural\Strategy\RegularTextType;
use DesignPatterns\Behavioural\Strategy\CursiveTextType;
use DesignPatterns\Behavioural\Strategy\BoldTextType;

class TextRenderer
{
    // В этой переменной храним "Стратегию"
    private $renderType;

    // При инициализации объекта "по дефолту"
    // устанавливаем обычный шрифт
    public function __construct()
    {
        $this->renderType = new RegularTextType();
    }

    // Непосредственная печать текста в браузере
    // делегируется установленной на текущий момент
    // "стратегии"
    public function print(string $text): void
    {
        $this->renderType->renderText($text);
    }

    // Метод - переключатель методов, работающий по
    // текстовому флагу, переданному в него.
    // Если пользователь ошибся при вводе, то сообщаем ему
    // что нужно передать в метод
    public function switchType(string $flag): void
    {
        switch ($flag):
            case "bold":
                $this->renderType = new BoldTextType();
                echo "You selected bold font!<br>";
                break;
            case "cursive":
                $this->renderType = new CursiveTextType();
                echo "You selected cursive font!<br>";
                break;
            case "regular":
                $this->renderType = new RegularTextType();
                echo "You selected regular font!<br>";
                break;
            default:
                echo "You need to set 'bold' or 'cursive' or 'regular'!<br>";
            endswitch;
    }
}