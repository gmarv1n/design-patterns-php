<?php
/**
 * Behavioural Patterns: Visitor
 * GloryKiller interface
 *
 * Интерфейс нашего Палача Рока, а по
 * совместительствую "посетителя" демонов :)
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 14.04.2021
 */
namespace DesignPatterns\Behavioural\Visitor;
use DesignPatterns\Behavioural\Visitor\Cacodemon;
use DesignPatterns\Behavioural\Visitor\Imp;

interface GloryKiller
{
    // Так как демонов мы придумали пока еще только двоих,
    // и методов в интерфейсе будет на этих двух
    public function killCacodemon(Cacodemon $cacodemon);
    public function killImp(Imp $ipm);
}