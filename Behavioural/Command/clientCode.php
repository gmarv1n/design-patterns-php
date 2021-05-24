<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
require_once("../../vendor/autoload.php");


use DesignPatterns\Behavioural\Command\ApplicationInvoker;
use DesignPatterns\Behavioural\Command\TextEditorApp;
use DesignPatterns\Behavioural\Command\ShortcutStart;
use DesignPatterns\Behavioural\Command\ConsoleStart;

$textEditorInvoker = new ApplicationInvoker();

$textEditorApp = new TextEditorApp();

$shortcutOfTextEditor = new ShortcutStart($textEditorApp, "Administrator");
$consoleTextEditorString = new ConsoleStart($textEditorApp, "User");

$textEditorInvoker->setStarter($shortcutOfTextEditor);
$textEditorInvoker->invokeTheApp();
$textEditorInvoker->setStarter($consoleTextEditorString);
$textEditorInvoker->invokeTheApp();