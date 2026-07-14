<?php

require_once __DIR__ . '/SubjectInterface.php';
require_once __DIR__ . '/StudentInterface.php';

class Classroom implements SubjectInterface
{
    private array $observers = [];
    private string $assignment;

    public function attach(StudentInterface $observer): void
    {
        $via = str_replace("Student",'',get_class($observer));
        echo "{$observer->name} enrolled via " . $via . "\n";
        $this->observers[] = $observer;
    }

    public function detach(StudentInterface $observer): void
    {
        $index = array_search($observer, $this->observers);
        if ($index !== false) {
            unset($this->observers[$index]);
        }
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->updateAssingment($this->assignment);
        }
    }

    public function postAssignment(string $assignment): void
    {
        echo "New Assignment Posted: {$assignment}\n";
        $this->assignment = $assignment;
        $this->notify();
    }
}
