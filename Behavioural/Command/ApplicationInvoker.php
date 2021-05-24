<?php
/**
 * Behavioural Patterns: Command
 * TextEditorInvoker class
 *
 * Класс, отвечающий за действия с текстовым редактором
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 12.04.2021
 */
namespace DesignPatterns\Behavioural\Command;
use DesignPatterns\Behavioural\Command\AppStarter;

class ApplicationInvoker
{
    // В переменной будет содержаться "запускальщик"
    private $starter;

    // С помощью этого метода "стартера" приложения
    // можно сменить, а зависимости от того - куда
    // потянулся пользователь: в консоль или к ярлыку
    public function setStarter(AppStarter $starter): void
    {
        $this->starter = $starter;
    }

    public function invokeTheApp(): void
    {
        $this->starter->startApp();
    }
}