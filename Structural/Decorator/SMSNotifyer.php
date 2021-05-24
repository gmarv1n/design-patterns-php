<?php
/**
 * Structural Patterns: Decorator
 * SMSNotifyer class
 *
 * Декоратор - уведомление через СМС
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 12.04.2021
 */
namespace DesignPatterns\Structural\Decorator;
use DesignPatterns\Structural\Decorator\BasicNotifyer;

class SMSNotifyer extends BasicNotifyer
{
    public function notify($message): string
    {
        return "SMS ".parent::notify($message);
    }
}