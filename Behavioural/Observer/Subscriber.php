<?php
/**
 * Behavioural Patterns: Observer
 * Subscriber interface
 *
 * Интерфейс подписчика
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 13.04.2021
 */
namespace DesignPatterns\Behavioural\Observer;

interface Subscriber
{
    public function getName();
    public function notify($books);
}