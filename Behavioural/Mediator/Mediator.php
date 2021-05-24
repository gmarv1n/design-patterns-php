<?php
/**
 * Behavioural Patterns: Mediator
 * Mediator interface
 *
 * Интерфейс посредника
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 13.04.2021
 */
namespace DesignPatterns\Behavioural\Mediator;
use DesignPatterns\Behavioural\Mediator\User;

interface Mediator
{
    // Отправка сообщения посредником
    public function sendMessage(User $user, string $message): void;
}