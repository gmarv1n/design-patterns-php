<?php
require_once("../../vendor/autoload.php");

use DesignPatterns\Behavioural\TemplateMethod\IEBrowser;
use DesignPatterns\Behavioural\TemplateMethod\ChromeBrowser;

$ie = new IEBrowser();
$ie->surf();

$chrome = new ChromeBrowser();
$chrome->surf();