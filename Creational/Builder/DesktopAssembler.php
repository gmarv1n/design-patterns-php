<?php
/**
 * Creational Patterns: Builder
 * DesktopAssembler class
 *
 * Класс - фабрика, отвечающая за сборку
 * конкретного вида компьютера
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 26.03.2021
 */
namespace DesignPatterns\Creational\Builder;
use DesignPatterns\Creational\Builder\PowerfullDesktopBuilder;
use DesignPatterns\Creational\Builder\SimpleDesktopBuilder;
use DesignPatterns\Creational\Builder\DesktopComputer;

class DesktopAssembler
{
    public static function assembleSimpleDesktop(): DesktopComputer
    {
        $builder = new SimpleDesktopBuilder();
        $builder->addSSDDrive();
        $builder->addVideoCard();
        return $builder->getReadyComputer();
    }

    public static function assemblePowerfullDesktop(): DesktopComputer
    {
        $builder = new PowerfullDesktopBuilder();
        $builder->addSSDDrive();
        $builder->addVideoCard();
        return $builder->getReadyComputer();
    }
}