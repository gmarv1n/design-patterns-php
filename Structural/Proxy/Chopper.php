<?php
/**
 * Structural Patterns: Proxy
 * Chopper interface
 *
 * Рубящие инструменты да объединим общим
 * интерфейсом!
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 09.04.2021
 */
namespace DesignPatterns\Structural\Proxy;

interface Chopper 
{
    public function chop($material): void;
}