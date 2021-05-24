<?php
/**
 * Behavioural Patterns: Strategy
 * CursiveTextType class
 *
 * Наклонный шрифт
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 14.04.2021
 */
namespace DesignPatterns\Behavioural\Strategy;
use DesignPatterns\Behavioural\Strategy\RenderType;

class CursiveTextType implements RenderType
{
    // Выводим курсив
    public function renderText(string $text): void
    {
        echo "<i>".$text."</i><br>";
    }
}