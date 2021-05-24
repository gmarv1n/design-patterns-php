<?php
/**
 * Structural Patterns: Composite
 * NailInterface interface
 *
 * Интерфейс гвоздя - в данном случае в привязке к примеру
 * только один метод - получить цену
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 02.04.2021
 */
namespace DesignPatterns\Structural\Composite;

interface NailInterface
{
    public function getPrice(): int;
}