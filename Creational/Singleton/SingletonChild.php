<?php
/**
 * Creational Patterns: Singleton
 * SingletonChild class
 *
 * наследник одиночки с перегруженным методом 
 * singletonLogic()
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 31.03.2021
 */
namespace DesignPatterns\Creational\Singleton;
use DesignPatterns\Creational\Singleton\Singleton;

class SingletonChild extends Singleton
{
    public function singletonLogic(): void
    {
        echo "And here is some buisness logic of Singleton's child!<br>";
    }
}