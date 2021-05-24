<?php
require_once("../../vendor/autoload.php");

use DesignPatterns\Behavioural\ChainOfResponsibillity\BlogPost;
use DesignPatterns\Behavioural\ChainOfResponsibillity\SubmittedPost;

$blogPostOne = new BlogPost("Post text #1", false, false);
$blogPostTwo = new BlogPost("Post text #2", true, true);

$postWriter = new SubmittedPost();

$postWriter->write($blogPostOne);
$postWriter->write($blogPostTwo);