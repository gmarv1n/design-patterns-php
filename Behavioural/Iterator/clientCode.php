<?php
require_once("../../vendor/autoload.php");

use DesignPatterns\Behavioural\Iterator\MyCollection;

$myCollection = new MyCollection(["Item one", "Item two", "Item three", "Item four"]);
$myCollectionIterator = $myCollection->getIterator();

echo $myCollectionIterator->getCurrent();
echo $myCollectionIterator->getNext();
echo $myCollectionIterator->getNext();
echo $myCollectionIterator->getNext();
echo $myCollectionIterator->getNext();
echo $myCollectionIterator->getNext();
echo $myCollectionIterator->getNext();
echo $myCollectionIterator->getNext();