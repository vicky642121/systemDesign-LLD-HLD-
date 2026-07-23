<?php

require_once __DIR__ . '/Command.php';

class GameInvoker
{
    private array $history = [];

    public function execute(Command $command): void
    {
        $command->execute();
        $this->history[] = $command;
    }

    public function undoLast(): void
    {
        if (empty($this->history)) {
            return;
        }

        $command = array_pop($this->history);
        $command->undo();
    }
}
