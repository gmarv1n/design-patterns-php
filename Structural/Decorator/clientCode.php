<?php
require_once("../../vendor/autoload.php");

use DesignPatterns\Structural\Decorator\SimpleNotification;
use DesignPatterns\Structural\Decorator\BasicNotifyer;
use DesignPatterns\Structural\Decorator\EmailNotifyer;
use DesignPatterns\Structural\Decorator\SMSNotifyer;
use DesignPatterns\Structural\Decorator\TelegramNotifyer;

function getNotification($text, $decorator)
{
    echo "Messagers and the message are:";
    echo $decorator->notify($text);
}

$textNotification = new SimpleNotification();

$basicNotifyer = new BasicNotifyer($textNotification);

$emailNotifyer = new EmailNotifyer($textNotification);
$smsNotifyer = new SMSNotifyer($textNotification);
$telegramNotifyer = new TelegramNotifyer($textNotification);

getNotification("Something sended via email", $emailNotifyer);
getNotification("SMS message", $smsNotifyer);
getNotification("Telegram message", $telegramNotifyer);

$telegramAndSMS = new TelegramNotifyer($smsNotifyer);

getNotification("Telegram and SMS message", $telegramAndSMS);