<?php
/**
 * Behavioural Patterns: Command
 * App interface
 *
 * Интерфейс приложения
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 12.04.2021
 */
namespace DesignPatterns\Behavioural\Command;

interface App
{
    // В нашем примере у приложения будет только один метод
    public function start(string $user): void;
}