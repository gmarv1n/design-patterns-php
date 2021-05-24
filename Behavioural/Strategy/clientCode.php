<?php
require_once("../../vendor/autoload.php");

use DesignPatterns\Behavioural\Strategy\TextRenderer;

$textWriter = new TextRenderer();
$textWriter->print("This is regular text!");
$textWriter->switchType("bold");
$textWriter->print("This is bold text!");
$textWriter->switchType("cursive");
$textWriter->print("This is cursive text!");

$textWriter->switchType("extrabold");