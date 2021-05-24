<?php
/**
 * Behavioural Patterns: Observer
 * BookLover class
 *
 * Абстрактный класс книголюба
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 13.04.2021
 */
namespace DesignPatterns\Behavioural\Observer;
use DesignPatterns\Behavioural\Observer\Subscriber;

abstract class BookLover implements Subscriber
{
    // У любого книголюба есть имя
    protected $name;
    protected $waitingList;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    // Время от времени книголюб хочет книгу, которая
    // еще не вышла, при их наличии храним список в 
    // поле класса $waitingList
    public function addToWaitingList($book)
    {
        $this->waitingList[] = $book;
    }

    // Механизм отбора книг из списка желаемых 
    // у разных чтецов могут быть разные, поэтому 
    // оставим метод абстрактным
    public abstract function notify($books);
}