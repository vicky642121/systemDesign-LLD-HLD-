<?php
require_once __DIR__ . '/CommonInterface.php';
require_once __DIR__ . '/AssignmentBoard.php';

class PostAssignment implements CommonInterface
{
    private AssignmentBoard $assboard;
    private string $assignment;

    public function __construct(AssignmentBoard $assboard, string $assignment)
    {
        $this->assboard = $assboard;
        $this->assignment = $assignment;
    }

    public function execute(): void
    {
        $this->assboard->post($this->assignment);
    }

    public function undo(): void
    {
        $deleted = $this->assboard->delete();
        echo "↩️ Undo → Removed: \"{$deleted}\"\n";
    }
}
