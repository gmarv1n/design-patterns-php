<?php
/**
 * Behavioural Patterns: Mediator
 * AdminUser class
 *
 * Это обычный пользователь
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 13.04.2021
 */
namespace DesignPatterns\Behavioural\Mediator;
use DesignPatterns\Behavioural\Mediator\User;

class RegularUser extends User
{
    // В конструкторе клеймим пользователя его типом :)
    public function __construct(string $name)
    {
        $this->name = "[Regular user]_".$name;
    }
}