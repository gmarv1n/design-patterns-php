<?php
/**
 * Behavioural Patterns: Strategy
 * RegularTextType class
 *
 * Обычная толщина текста
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 14.04.2021
 */
namespace DesignPatterns\Behavioural\Strategy;
use DesignPatterns\Behavioural\Strategy\RenderType;

class RegularTextType implements RenderType
{
    // Выводим обычный текст
    public function renderText(string $text): void
    {
        echo $text."<br>";
    }
}