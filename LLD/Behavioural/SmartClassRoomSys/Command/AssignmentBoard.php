<?php

class AssignmentBoard

{
    private array $assignments = [];

    public function post(string $asgmnt): void
    {
        $this->assignments[] = $asgmnt;
        echo "📌 Posted: " . $asgmnt . "\n";
    }

    public function delete(): string
    {
        if (empty($this->assignments)) {
            echo "⚠️ Nothing to delete\n";
            return "";
        }

        $deleted = array_pop($this->assignments);
        return $deleted;
    }

    public function deleteSpecific(string $name): string
    {
        $index = array_search($name, $this->assignments, true);
        if ($index === false) {
            echo "⚠️ Assignment not found: {$name}\n";
            return "";
        }

        $deleted = $this->assignments[$index];
        array_splice($this->assignments, $index, 1);
        echo "🗑️ Deleted: " . $deleted . "\n";
        return $deleted;
    }

    public function list(): array
    {
        return $this->assignments;
    }

    public function insertAt(string $asgmnt, int $index): void
    {
        if ($index < 0) {
            $index = 0;
        }
        if ($index > count($this->assignments)) {
            $index = count($this->assignments);
        }
        array_splice($this->assignments, $index, 0, [$asgmnt]);
    }
}
