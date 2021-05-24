<?php
/**
 * Behavioural Patterns: Memento
 * SomeStringCarrier class
 *
 * Объект управляющий созданием снимков
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 13.04.2021
 */
namespace DesignPatterns\Behavioural\Memento;
use DesignPatterns\Behavioural\Memento\SomeString;

class SomeStringCarrier
{
    // В свойствах будем хранить созданные снимки, а так же
    // сам объект SomeString
    private $snapshots = array();

    private $someStringObj;

    // В конструкторе инициализируем переменные и сразу же
    // создаем снимок самого первого состояния
    public function __construct(SomeString $someStringObj)
    {
        $this->someStringObj = $someStringObj;
        $this->createSnapShot();
    }

    // При создании снимка - обращаемся к методу createSnapShot()
    // и записываем результирующий объект в массив
    public function createSnapShot()
    {
        array_push($this->snapshots, $this->someStringObj->createSnapShot());
    }

    // Наш ctrl+z. Восстанавливаем состояние объекта, передав в него 
    // снепшот, при условии что есть из чего восстанавливать
    public function undo(): void
    {   
        if (sizeof($this->snapshots) >= 2) {
            $this->someStringObj->restoreFromSnapShot($this->snapshots[sizeof($this->snapshots) - 2]);
            unset($this->snapshots[sizeof($this->snapshots) - 1]);
        } else {
            echo "You have only one initial snapshot, nothing to restore!<br>";
        }
    }
    
    // Метод для смены строки в объекте SomeString, так же
    // подразумевающий создание снимка при смене
    public function changeString(string $newString): void
    {
        $this->someStringObj->changeString($newString);
        $this->createSnapShot();
    }
}