<?php

require_once __DIR__ . '/MovementStrategy.php';

class PenaltyMove implements MovementStrategy
{
    public function move(int $position, int $dice): int
    {
        return $position + (int)($dice / 2);
    }
}
