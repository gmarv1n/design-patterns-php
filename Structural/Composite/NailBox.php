<?php
/**
 * Structural Patterns: Composite
 * NailBox class
 *
 * Коробка с гвоздями, которая, в итоге, вызовом одного метода
 * позволить посчитать всю сумму гвоздей внутри себя, независимо
 * от того сколько в ней гвоздей и коробок
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 02.04.2021
 */
namespace DesignPatterns\Structural\Composite;
use DesignPatterns\Structural\Composite\NailInterface;
use DesignPatterns\Structural\Composite\Nail;

class NailBox implements NailInterface
{   
    // Контейнер для гвоздей и других коробок
    private $container = array();
    private $price;

    public function getPrice(): int
    {
        return $this->price;
    }

    // Метод, добавляющий в коробку гвоздь или коробку с гвоздями
    // Метод увеличивает стоимость этой коробки на стоимость добавленных в него
    // гвоздей
    public function addItem(Nailinterface $nailOrNails): void
    {
        $this->price += $nailOrNails->getPrice();
        array_push($this->container, $nailOrNails);
    }
}