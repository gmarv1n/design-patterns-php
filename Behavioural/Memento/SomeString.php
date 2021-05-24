<?php
/**
 * Behavioural Patterns: Memento
 * SomeString class
 *
 * Объект, хранящий строку с возможностью
 * сохранять его состояния
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 13.04.2021
 */
namespace DesignPatterns\Behavioural\Memento;
use DesignPatterns\Behavioural\Memento\SomeStringSnapShot;

class SomeString
{
    private $stringItself = "";

    // В конструкторе инициализуем свойство строкой
    public function __construct(string $initString)
    {
        $this->stringItself = $initString;
        echo "New SomeString created with value: ".$this->stringItself."<br>";
    }

    // Метод для измеения строки
    public function changeString($newString): void
    {
        $prevString = $this->stringItself;
        $this->stringItself = $newString;
        echo "The SomeString changed from ".$prevString." to ".$this->stringItself."<br>";
    }

    public function getString(): string
    {
        return $this->stringItself;
    }

    // Фабричный метод, создающий снимок
    public function createSnapShot(): SomeStringSnapShot
    {
        return new SomeStringSnapShot($this->stringItself);
    }

    // С помощью этого метода будем восстанавливать состояние
    // объекта из сохраненных ранее снимков
    public function restoreFromSnapShot(SomeStringSnapShot $snapshot): void
    {
        $this->stringItself = $snapshot->getString();
        echo "String is restored from snapshot with date: ".$snapshot->getDate()." and the prev string is ".$snapshot->getString()."<br>";
    }
    
}