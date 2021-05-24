<?php
/**
 * Behavioural Patterns: Observer
 * RegularBookLover class
 *
 * Самый обычный книголюб, который знает
 * что хочет
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 13.04.2021
 */
namespace DesignPatterns\Behavioural\Observer;
use DesignPatterns\Behavioural\Observer\BookLover;

class RegularBookLover extends BookLover
{
    // Если у магазина, на который подписан книголюб
    // появляется новая книга - пробегаем по присланному 
    // магазином списку и сверяемся со списком желаемого
    // Если есть совпадения - покупаем книжку и вычеркиваем
    // из списка
    public function notify($books)
    {
        foreach ($books as $book) {
            foreach ($this->waitingList as $waitingBookTitle)
            {
                if ($book === $waitingBookTitle) {
                    unset($this->waitingList[array_search($book, $this->waitingList)]);
                    echo "Hey! ".$book." already in the store! ".$this->getName()." bought it!<br>";
                }
            }
        }
    }
}