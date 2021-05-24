<?php
/**
 * Behavioural Patterns: Command
 * ShortcutStart class
 *
 * Запускальщик программ путем накликивания
 * на иконку приложения
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 12.04.2021
 */
namespace DesignPatterns\Behavioural\Command;
use DesignPatterns\Behavioural\Command\AppStarter;
use DesignPatterns\Behavioural\Command\App;

class ShortcutStart implements AppStarter
{
    // Наш ярлыковый запускальщик может запускать 
    // любое приложение, реализующее интерфейс App,
    // от имени любого строкового пользователя :)
    private $reciever;
    private $user;

    public function __construct(App $reciever, string $user)
    {
        $this->reciever = $reciever;
        $this->user = $user;
    }

    // Клиекаем по иконке и сообщаем приложению, какой
    // именно юзер это сделал!
    public function startApp(): void
    {
        echo "User ".$this->user." starting the app, by clicking on the App icon!<br>";
        $this->reciever->start($this->user);
    }
}