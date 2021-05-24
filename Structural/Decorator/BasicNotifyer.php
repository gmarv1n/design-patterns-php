<?php
/**
 * Structural Patterns: Decorator
 * BasicNotifyer class
 *
 * Базовый класс декораторов для 
 * SimpleNotification
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 12.04.2021
 */
namespace DesignPatterns\Structural\Decorator;
use DesignPatterns\Structural\Decorator\Notifyer;

class BasicNotifyer implements Notifyer
{
    // В базовом объекте декоратора должен быть
    // объект класса SimpleNotification, так как
    // именно его функционал мы и расширяем
    // в потомках - вполне может присутствовать и 
    // потомок
    protected $notifyer;

    public function __construct(Notifyer $notifyer)
    {
        $this->notifyer = $notifyer;
    }

    // Родительский класс - обращается к SimpleNotification, 
    // в потомках это может быть и любая другая "обертка"
    public function notify($message): string
    {
        return $this->notifyer->notify($message);
    }
}