<?php
require_once("../../vendor/autoload.php");

use DesignPatterns\Behavioural\Observer\BookStore;
use DesignPatterns\Behavioural\Observer\RegularBookLover;

$booksStore = new BookStore(array("Lord Of The Rings", "Journey to the End of the Night", "Clean Code"));
$readerGuyAlex = new RegularBookLover("Alex");
$readerGuyAlex->addToWaitingList("Clean Code");
$readerGuyBob = new RegularBookLover("Bob");
$readerGuyBob->addToWaitingList("Journey to the End of the Night");
$booksStore->subscribe($readerGuyAlex);
$booksStore->subscribe($readerGuyBob);
$readerGuyBob->addToWaitingList("Ride The Tiger");
$booksStore->updateCatalog("Ride The Tiger");