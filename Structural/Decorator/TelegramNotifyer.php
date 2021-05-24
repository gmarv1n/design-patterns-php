<?php
/**
 * Structural Patterns: Decorator
 * TelegramNotifyer class
 *
 * Декоратор - уведомление через Телеграм
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 12.04.2021
 */
namespace DesignPatterns\Structural\Decorator;
use DesignPatterns\Structural\Decorator\BasicNotifyer;

class TelegramNotifyer extends BasicNotifyer
{
    public function notify($message): string
    {
        return "Telegram ".parent::notify($message);
    }
}