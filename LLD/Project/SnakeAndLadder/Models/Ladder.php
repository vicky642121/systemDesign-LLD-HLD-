<?php

require_once __DIR__ . '../../Creational/FactoryPattern/BoardElement.php';

class Ladder implements BoardElement
{
    private int $bottom;
    private int $top;

    public function __construct(int $bottom, int $top)
    {
        $this->bottom = $bottom;
        $this->top = $top;
    }

    public function getStart(): int
    {
        return $this->bottom;
    }

    public function getEnd(): int
    {
        return $this->top;
    }

    public function apply(int $position): int
    {
        echo "🪜 Lucky! Ladder found! {$this->bottom} → {$this->top}\n";
        return $this->top;
    }
}
