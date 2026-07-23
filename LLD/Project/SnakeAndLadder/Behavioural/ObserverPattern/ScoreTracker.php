<?php

require_once __DIR__ . '/ObserverInterface.php';
require_once __DIR__ . '/../../Models/Player.php';

class ScoreTracker implements Observer
{
    private array $stats = [];

    public function update(string $event, mixed $target): void
    {
        $name = $target instanceof Player ? $target->getName() : (string) $target;

        if (!isset($this->stats[$name])) {
            $this->stats[$name] = [
                'snake' => 0,
                'ladder' => 0,
                'wins' => 0,
            ];
        }

        if ($event === 'Player hits Snake') {
            $this->stats[$name]['snake']++;
        } elseif ($event === 'Player hits Ladder') {
            $this->stats[$name]['ladder']++;
        } elseif ($event === 'Player wins') {
            $this->stats[$name]['wins']++;
        }
    }

    public function getStats(): array
    {
        return $this->stats;
    }
}
