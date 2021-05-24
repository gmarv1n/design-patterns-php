<?php
/**
 * Behavioural Patterns: Strategy
 * RenderType interface
 *
 * Интерфейс типа ввода текста
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 14.04.2021
 */
namespace DesignPatterns\Behavioural\Strategy;

interface RenderType
{
    // Метод, выводящий текст на экран
    public function renderText(string $text): void;
}