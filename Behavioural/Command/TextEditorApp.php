<?php
/**
 * Behavioural Patterns: Command
 * TextEditorApp class
 *
 * Текстовый редактор
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 12.04.2021
 */
namespace DesignPatterns\Behavioural\Command;
use DesignPatterns\Behavioural\Command\App;

class TextEditorApp implements App
{
    // Любой, в нашем случае, пользователь
    // может приложение запустить
    public function start(string $user): void
    {
        echo "Text editor started by ".$user."<br>";
    }
}