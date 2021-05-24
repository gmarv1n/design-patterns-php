<?php
/**
 * Behavioural Patterns: Iterator
 * MyIterator interface
 *
 * Интерфейс нашего итератора
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 13.04.2021
 */
namespace DesignPatterns\Behavioural\Iterator;

interface MyIterator
{
    public function getCurrent();
    public function hasNext(): bool;
    public function getNext();
}