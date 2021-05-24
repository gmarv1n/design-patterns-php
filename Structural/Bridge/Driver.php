<?php
/**
 * Structural Patterns: Bridge
 * Driver interface
 *
 * Интерфейс водителя
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 12.04.2021
 */
namespace DesignPatterns\Structural\Bridge;

interface Driver
{
    public function getName(): string;
    public function startEngine(): void;
    public function startDriving(): void;
    public function crash(): void;
}