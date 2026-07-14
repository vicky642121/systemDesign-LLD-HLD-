<?php

require_once __DIR__ . '/CommonInterface.php';
require_once __DIR__ . '/AssignmentBoard.php';

class DeleteAssignment implements CommonInterface
{

    private AssignmentBoard $assboard;
    private string $assignment = "";
    private ?int $deletedIndex = null;

    public function __construct(AssignmentBoard $assboard, ?string $assignment = null)
    {
        $this->assboard = $assboard;
        if ($assignment !== null) {
            $this->assignment = $assignment;
        }
    }

    public function execute(): void
    {
        if ($this->assignment !== "") {
            $assignments = $this->assboard->list();
            $index = array_search($this->assignment, $assignments, true);
            $this->deletedIndex = ($index === false) ? null : $index;
            $this->assignment = $this->assboard->deleteSpecific($this->assignment);
        } else {
            $this->assignment = $this->assboard->delete();
            $this->deletedIndex = null;
        }
    }

    public function undo(): void
    {
        if ($this->deletedIndex !== null) {
            $this->assboard->insertAt($this->assignment, $this->deletedIndex);
            echo "↩️ Undo → Restored: \"{$this->assignment}\"\n";
        } else {
            $this->assboard->post($this->assignment);
            echo "↩️ Undo → Restored: \"{$this->assignment}\"\n";
        }
    }
}
