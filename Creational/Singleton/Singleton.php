<?php
/**
 * Creational Patterns: Singleton
 * Singleton class
 *
 * Класс - одиночка, с реализованной возможностью
 * его наследования
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 31.03.2021
 */
namespace DesignPatterns\Creational\Singleton;

class Singleton
{
    // Обявляем массив с нашими "Одиночками"
    private static $instances = [];

    private static $singleInstance;

    // Перекрываем работу конструктора
    protected function __construct()
    {

    }

    // И переходим к самому интересному методу: так сказать к "фабричному"
    // методу синглтона
    public static function getInstance(): Singleton
    {
        // Присваиваем переменной имя класса, из которого вызывается метод
        // он будет ключем в массиве
        $class = static::class;
        // Проверяем по ключу, не лижит ли в "пулле" одиночек
        // такой класс, если есть - возвращаем
        if (isset(self::$instances[$class])) {
            return self::$instances[$class];
        } else {
        // В противном случае - добавляем в массив экземпляр этого класса
        // с ключем и так же возвращаем
            self::$instances[$class] = new static();
            return self::$instances[$class];
        }
    }

    // "Простая реализация" синглтона, для демонстрации того,
    // что в таком случае - от имени какого бы потомка мы не
    // создавали синглтон, создаваться и храниться в статической
    // переменной будет только базовый класс, соответственно
    // доступ будет исключительно к методам базового класса
    public static function getSingleInstance(): Singleton
    {
        if (isset(self::$singleInstance)) {
            return self::$singleInstance;
        } else {
            self::$singleInstance = new static();
            return self::$singleInstance;
        }
    }

    /**
     * В этой части класса расположены методы, которые благодаря
     * реализации метода getInstance() могут и будут отличаться у всех 
     * потомков. 
     */

    public function printName(): void
    {
        echo static::class."<br>";
    }

    public function singletonLogic(): void
    {
        echo "Here is some buisness logic of Singleton class!<br>";
    }
}