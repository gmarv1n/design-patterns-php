<?php
/**
 * Behavioural Patterns: Observer
 * Observer interface
 *
 * Интерфейс наблюдателя
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 13.04.2021
 */
namespace DesignPatterns\Behavioural\Observer;
use DesignPatterns\Behavioural\Observer\Subscriber;

interface Observer
{
    public function subscribe(Subscriber $subscriber);
    public function unsubscribe(Subscriber $subscriber);
    public function updateCatalog(string $item);
    public function notifySubscribers();
}