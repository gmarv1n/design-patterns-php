<?php
/**
 * Behavioural Patterns: Memento
 * SnapShot class
 *
 * Интерфейс для объекта - снимка
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 13.04.2021
 */
namespace DesignPatterns\Behavioural\Memento;

interface SnapShot
{
    public function getName(): string;
    public function getDate(): string;
}