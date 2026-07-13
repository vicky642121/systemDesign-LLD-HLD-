<?php

require_once __DIR__ .'/TextEditor.php';
require_once __DIR__ .'/CommonInterface.php';

class DeleteCommand implements CommonInterface
{
    private TextEditor $editor;
    private string $deletedWord = "";

    public function __construct(TextEditor $editor)
    {
        $this->editor = $editor;
    }

    public function execute(): void
    {
        $this->deletedWord = $this->editor->delete();
    }

    public function undo(): void
    {
        $this->editor->write($this->deletedWord);
        echo "↩️ Undo DeleteCommand\n";
    }
}
