<?php
/**
 * Structural Patterns: Composite
 * Nail class
 *
 * Это гвоздь, у него есть конструктор, в котором задается цена
 * Это всё о гвозде :)
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 02.04.2021
 */
namespace DesignPatterns\Structural\Composite;
use DesignPatterns\Structural\Composite\NailInterface;

class Nail implements NailInterface
{
    private $price;

    public function __construct(int $price)
    {
        $this->price = $price;
    }

    public function getPrice(): int
    {
        return $this->price;
    }
}