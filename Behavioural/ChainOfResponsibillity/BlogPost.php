<?php
/**
 * Behavioural Patterns: Chain Of Responsibillity
 * BlogPost class
 *
 * Класс - запись в блоге
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 12.04.2021
 */
namespace DesignPatterns\Behavioural\ChainOfResponsibillity;

class BlogPost
{
    // У объекта записи есть состояние - текст записи
    // и массив флагов, инициализируемых при создании
    public $text;
    public $flags = [];
    
    public function __construct($text, $isSubmitted, $isDbReady)
    {
        $this->text = $text;
        $this->flags["isSubmitted"] = $isSubmitted;
        $this->flags["isDbReady"] = $isDbReady;
    }
}