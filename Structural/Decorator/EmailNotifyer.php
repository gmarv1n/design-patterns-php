<?php
/**
 * Structural Patterns: Decorator
 * EmailNotifyer class
 *
 * Декоратор - уведомление по e-mail
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 12.04.2021
 */
namespace DesignPatterns\Structural\Decorator;
use DesignPatterns\Structural\Decorator\Notifyer;
use DesignPatterns\Structural\Decorator\BasicNotifyer;

class EmailNotifyer extends BasicNotifyer
{
    public function notify($message): string
    {
        return "Email ".parent::notify($message);
    }
}