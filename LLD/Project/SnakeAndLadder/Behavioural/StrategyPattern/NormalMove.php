<?php

require_once __DIR__ . '/MovementStrategy.php';

class NormalMove implements MovementStrategy
{
    public function move(int $position, int $dice): int
    {
        return $position + $dice;
    }
}
