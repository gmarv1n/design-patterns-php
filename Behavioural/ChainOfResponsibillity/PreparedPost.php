<?php
/**
 * Behavioural Patterns: Chain Of Responsibillity
 * PreparedPost class
 *
 * Абстрактный класс для записи блога
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 12.04.2021
 */
namespace DesignPatterns\Behavioural\ChainOfResponsibillity;
use DesignPatterns\Behavioural\ChainOfResponsibillity\BlogPost;

abstract class PreparedPost
{
    // Приватная переменная для сохранения следующего шага
    // (я догадываюсь что в рамках примера она кажется лишней, 
    // но не упомянуть ее будет некорректно)
    private $nextStep;

    // Абстрактный метод "записать" - будет реализовываться по разному у потомков
    abstract function write(BlogPost $blogPost): void;
}