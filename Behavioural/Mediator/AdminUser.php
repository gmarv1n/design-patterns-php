<?php
/**
 * Behavioural Patterns: Mediator
 * AdminUser class
 *
 * Администратор чата
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 13.04.2021
 */
namespace DesignPatterns\Behavioural\Mediator;
use DesignPatterns\Behavioural\Mediator\User;

class AdminUser extends User
{
    // Администратора одаряем подписью
    public function __construct(string $name)
    {
        $this->name = "[Adminstrator]_".$name;
    }
}