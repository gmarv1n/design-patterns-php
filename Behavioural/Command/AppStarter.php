<?php
/**
 * Behavioural Patterns: Command
 * AppStarter class
 *
 * Интерфейс "запускальщика" приложений
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 12.04.2021
 */
namespace DesignPatterns\Behavioural\Command;

interface AppStarter
{
    public function startApp(): void;
}