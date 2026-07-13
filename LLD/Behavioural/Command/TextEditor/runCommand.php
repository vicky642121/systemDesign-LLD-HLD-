<?php

require_once __DIR__ .'/TextEditor.php';
require_once __DIR__ .'/EditorHistory.php';
require_once __DIR__ .'/WriteCommand.php';
require_once __DIR__ .'/DeleteCommand.php';


$editor  = new TextEditor();
$history = new EditorHistory();


$history->executeCommand(new WriteCommand($editor, "Hello "));
$history->executeCommand(new WriteCommand($editor, "world "));
$history->executeCommand(new WriteCommand($editor, "PHP! "));


$history->executeCommand(new DeleteCommand($editor));
$history->undo();
$history->undo();

