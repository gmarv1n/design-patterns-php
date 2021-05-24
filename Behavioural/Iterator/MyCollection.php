<?php
/**
 * Behavioural Patterns: Iterator
 * MyCollection class
 *
 * Самодельная коллекция с фабричным методом
 * для создания итератор
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 13.04.2021
 */
namespace DesignPatterns\Behavioural\Iterator;
use DesignPatterns\Behavioural\Iterator\MyIterator;

class MyCollection
{
    private $collection = [];

    public function __construct(array $collection)
    {
        $this->collection = $collection;
    }

    public function getIterator(): MyIterator
    {
        return new SimpleIterator($this->collection);
    }
}