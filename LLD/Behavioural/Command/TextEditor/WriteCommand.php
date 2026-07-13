<?php

require_once __DIR__ . '/TextEditor.php';
require_once __DIR__ . '/CommonInterface.php';

//concrete command each wraps the one or more action

class WriteCommand implements CommonInterface
{
    private TextEditor $editor;
    private string $word;

    public function __construct(TextEditor $editor, string $word)
    {
        $this->editor = $editor;
        $this->word = $word;
    }

    public function execute(): void
    {
        $this->editor->write($this->word);
    }

    public function undo(): void
    {
        $this->editor->delete();
        echo "↩️ Undo WriteCommand\n";
    }
}
