<?php

require_once __DIR__ . '/MovementStrategy.php';

class PowerMove implements MovementStrategy
{
    public function move(int $position, int $dice): int
    {
        return $position + ($dice * 2);
    }
}
