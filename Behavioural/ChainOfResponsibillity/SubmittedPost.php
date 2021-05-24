<?php
/**
 * Behavioural Patterns: Chain Of Responsibillity
 * SubmittedPost class
 *
 * Класс - начало нашей короткой цепочки обязанностей
 * направленной на достижения поста базы данных.
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 12.04.2021
 */
namespace DesignPatterns\Behavioural\ChainOfResponsibillity;
use DesignPatterns\Behavioural\ChainOfResponsibillity\PreparedPost;
use DesignPatterns\Behavioural\ChainOfResponsibillity\DbReadyPost;
use DesignPatterns\Behavioural\ChainOfResponsibillity\BlogPost;

class SubmittedPost extends PreparedPost
{
    // Метод принимает в виде аргумента объект BlogPost
    // и если флаг "isSubmitted" - истиный, то
    // передает дальнейшее управление цепочкой классу
    // DbConnectedForPost. В противном случае - сообщаем
    // пейсателю о том, что неплохо бы было ткнуть кнопочку 
    // "Отправить" :)
    public function write(BlogPost $blogPost): void
    {
        if($blogPost->flags["isSubmitted"] == true) {
            $this->nextStep = new DbReadyPost();
            $this->nextStep->write($blogPost);
        } else {
            echo "FAILED! You need to submit post first!<br>";
        }
    }
}