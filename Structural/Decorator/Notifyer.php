<?php
/**
 * Structural Patterns: Decorator
 * Notifyer interface
 *
 * Интерфейс уведомляльщика, который должны реализовывать
 * как расширяемый шаблоном класс, так и непосредственно
 * декораторы
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 12.04.2021
 */
namespace DesignPatterns\Structural\Decorator;

interface Notifyer 
{
    public function notify($message): string;
}