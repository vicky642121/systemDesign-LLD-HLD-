<?php

require_once __DIR__ . '/MovementStrategy.php';

class PlayerMovement
{
    private MovementStrategy $strategy;

    public function __construct(MovementStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(MovementStrategy $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function move(int $position, int $dice): int
    {
        return $this->strategy->move($position, $dice);
    }
}
