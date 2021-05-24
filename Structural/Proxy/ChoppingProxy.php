<?php
/**
 * Structural Patterns: Proxy
 * ChoppingProxy class
 *
 * Объект - заместитель для рубящих инструментов
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 09.04.2021
 */
namespace DesignPatterns\Structural\Proxy;
use DesignPatterns\Structural\Proxy\Chopper;
use DesignPatterns\Structural\Proxy\Axe;
use DesignPatterns\Structural\Proxy\Machete;

class ChoppingProxy implements Chopper
{
    private $chopper;
    
    // В зависимости от того что педер нами,
    // выбираем подходящий инструмент!
    public function chop($material): void
    {
        if ($material == "Bush") {
            $this->chopper = new Machete();
            $this->chopper->chop($material);
        } else if ($material == "Tree") {
            $this->chopper = new Axe();
            $this->chopper->chop($material);
        } else {
            echo "Looks like ".$material." is different from trees or bushes, you don't have any suitable instrument...";
        }
    }
}