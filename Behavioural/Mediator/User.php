<?php
/**
 * Behavioural Patterns: Mediator
 * User class
 *
 * Абстрактный класс пользователя чата
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 13.04.2021
 */
namespace DesignPatterns\Behavioural\Mediator;
use DesignPatterns\Behavioural\Mediator\Mediator;

abstract class User
{
    // В защищенной переменной будет находиться объект посредника
    // для общения между пользователями, а так же имя пользователя
    protected $mediator;
    protected $name;

    // Установка посредника
    public function setMediator(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }

    // Отправка сообщений будет происходить через посредника
    public function sendMessage($message): void
    {
        $this->mediator->sendMessage($this, $message);
    }

    public function getName(): string
    {
        return $this->name;
    }
}