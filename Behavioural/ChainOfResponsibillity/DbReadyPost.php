<?php
/**
 * Behavioural Patterns: Chain Of Responsibillity
 * DbConnectedForPost class
 *
 * Второе звено нашей цепочки
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 12.04.2021
 */
namespace DesignPatterns\Behavioural\ChainOfResponsibillity;
use DesignPatterns\Behavioural\ChainOfResponsibillity\PreparedPost;
use DesignPatterns\Behavioural\ChainOfResponsibillity\BlogPost;

class DbReadyPost extends PreparedPost
{
    // Все тоже самое, но теперь проверяем подготовлен ли 
    // пост для записи в БД, если нет, то сообщаем об этом
    public function write(BlogPost $blogPost): void
    {
        if($blogPost->flags["isDbReady"] == true) {
            echo $blogPost->text." was succesfully writed to DB!<br>";
        } else {
            echo "FAILED! You need to htmlspecialchars() th post before or somthing!!<br>";
        }
    }
}