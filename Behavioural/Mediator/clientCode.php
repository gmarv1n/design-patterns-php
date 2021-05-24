<?php
require_once("../../vendor/autoload.php");

use DesignPatterns\Behavioural\Mediator\AdminUser;
use DesignPatterns\Behavioural\Mediator\RegularUser;
use DesignPatterns\Behavioural\Mediator\ChatMediator;

$adminUser = new AdminUser("Vasyan");
$regularIserVova = new RegularUser("Vova");
$chatRoom = new ChatMediator($adminUser, $regularIserVova);

$adminUser->sendMessage("Hi plebs, I'm ADMIN!");
$regularIserVova->sendMessage("Hi, I'm Vovan!");

$regularIserSlava = new RegularUser("Slava");
$chatRoom->addUser($regularIserSlava);
$regularIserSlava->sendMessage("Hello guys, I'm Slava, how are you?");

$chatRoom->showUsers();