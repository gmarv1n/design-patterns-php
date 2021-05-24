<?php
/**
 * Structural Patterns: Decorator
 * SimpleNotification class
 *
 * Класс простого уведомления, который мы прокачаем
 * декораторами
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 12.04.2021
 */
namespace DesignPatterns\Structural\Decorator;
use DesignPatterns\Structural\Decorator\Notifyer;

class SimpleNotification implements Notifyer
{
    public function notify($message): string
    {
        return "[".$message."]";
    }
}