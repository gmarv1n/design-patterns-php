<?php
/**
 * Behavioural Patterns: Memento
 * SomeStringSnapShot class
 *
 * Класс снимка для объекта строки
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 13.04.2021
 */
namespace DesignPatterns\Behavioural\Memento;
use DateTime;
use DesignPatterns\Behavioural\Memento\SnapShot;

class SomeStringSnapShot implements SnapShot
{
    // Полями класса будут дата и значение строки
    private $date;
    private $snappedString;

    // Поля инициализируются в консрукторе
    public function __construct($stringValue)
    {
        $this->snappedString = $stringValue;
        $this->date = date('Y-M-D-H-i-s');
        echo "[New SnapShot created] ".$this->getName();
    }

    public function getDate(): string
    {
        return $this->date;
    }

    // Метод, возвращающий имя снепшота, состоящее
    // из его даты и собственно строки
    public function getName(): string
    {
        return $this->date." is date and the string is ".$this->snappedString."<br>";
    }

    public function getString()
    {
        return $this->snappedString;
    }
}