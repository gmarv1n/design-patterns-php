<?php
/**
 * Behavioural Patterns: Strategy
 * BoldTextType class
 *
 * Жирный шрифт
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 14.04.2021
 */
namespace DesignPatterns\Behavioural\Strategy;
use DesignPatterns\Behavioural\Strategy\RenderType;

class BoldTextType implements RenderType
{
    // Выводим жирный текст
    public function renderText(string $text): void
    {
        echo "<b>".$text."</b><br>";
    }
}