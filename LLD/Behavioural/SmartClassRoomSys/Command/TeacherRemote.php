<?php

require_once __DIR__ . '/CommonInterface.php';

class TeacherRemote
{
    private array $history = [];

    public function executeCommand(CommonInterface $command): void
    {
        $command->execute();
        $this->history[] = $command;
    }

    public function undo(): void
    {
        if (empty($this->history)) {
            echo "⚠️ Nothing to undo!\n";
            return;
        }
        $lastCommand = array_pop($this->history);
        $lastCommand->undo();
    }
}
