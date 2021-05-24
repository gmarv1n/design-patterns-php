<?php
/**
 * Behavioural Patterns: Observer
 * BookStore class
 *
 * BookStore интернет - магазин, 
 * реализующий шаблон Наблюдатель
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 13.04.2021
 */
namespace DesignPatterns\Behavioural\Observer;
use DesignPatterns\Behavioural\Observer\Observer;
use DesignPatterns\Behavioural\Observer\Subscriber;

class BookStore implements Observer
{
    // В полях класса содержатся 2 массива:
    // подписчики на обновления каталога и
    // собственно каталог, в данном случае - книжный
    private $subscribers = [];
    private $books = [];

    public function __construct(array $startBooksPull)
    {
        $this->books = array_merge($this->books, $startBooksPull);
    }
    
    // Добавим подписчика и сразу передадим ему список книг,
    // вдруг среди них уже есть нужные ему
    public function subscribe(Subscriber $subscriber)
    {
        $this->subscribers[$subscriber->getName()] = $subscriber;
        $subscriber->notify($this->books);
    }

    // Кому-то может надоесть ждать
    public function unsubscribe(Subscriber $subscriber)
    {
        unset($this->subscribers[$subscriber->getName()]);
    }

    // Добавляем новые книги в каталог и уведомляем об этом всех подписчиков
    public function updateCatalog(string $book)
    {
        $this->books[] = $book;
        echo $book." added to book catalog!<br>";
        $this->notifySubscribers();
    }

    // Перебираем каждого из подписчиков, обращая их внимание
    // на обновление каталога
    public function notifySubscribers()
    {
        foreach ($this->subscribers as $subscriber) {
            $subscriber->notify($this->books);
        }
    }

}