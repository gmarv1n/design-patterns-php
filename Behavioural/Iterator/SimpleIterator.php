<?php
/**
 * Behavioural Patterns: Iterator
 * SimpleIterator class
 *
 * Наш простой итератор
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 13.04.2021
 */
namespace DesignPatterns\Behavioural\Iterator;
use DesignPatterns\Behavioural\Iterator\MyIterator;

class SimpleIterator implements MyIterator
{
    // В свойствах объекта будет храниться
    // массив array() для итерации, а так же
    // текущая позиция итератор
    private $collection;
    private $currentPosition = 0;

    public function __construct(array $collection)
    {
        $this->collection = $collection;    
    }

    public function getCurrent()
    {
        return $this->collection[$this->currentPosition];
    }

    public function hasNext(): bool
    {
        if (isset($this->collection[$this->currentPosition + 1])) {
            return true;
        } else {
            return false;
        }
    }

    public function getNext()
    {
        if($this->hasNext()) {
            $this->currentPosition++;
            return $this->collection[$this->currentPosition];
        } else {
            echo "No next item.";
        }
    }
}