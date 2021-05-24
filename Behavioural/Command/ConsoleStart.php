<?php
/**
 * Behavioural Patterns: Command
 * ConsoleStart class
 *
 * Запускальщик программ через консоль
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 12.04.2021
 */
namespace DesignPatterns\Behavioural\Command;
use DesignPatterns\Behavioural\Command\AppStarter;

class ConsoleStart implements AppStarter
{
    // Консольный запускальщик может запускать 
    // любое приложение, реализующее интерфейс App,
    // от имени любого строкового пользователя :)
    private $reciever;
    private $user;

    public function __construct(App $reciever, string $user)
    {
        $this->reciever = $reciever;
        $this->user = $user;
    }

    // То же, что и с ярлыком, но команда поступила из
    // терминала
    public function startApp(): void
    {
        echo "User ".$this->user." starting the app, by writing console command!<br>";
        $this->reciever->start($this->user);
    }
}