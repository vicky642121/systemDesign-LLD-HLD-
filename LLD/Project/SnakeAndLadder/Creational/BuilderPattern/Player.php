<?php

class Player
{
    private string $name;
    private int $position = 0;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPosition(): int
    {
        return $this->position;
    }

    public function setPosition(int $position): void
    {
        $this->position = $position;
    }

    public function moveBy(int $steps): void
    {
        $this->position += $steps;
    }

    public function moveTo(int $position): void
    {
        $this->position = $position;
    }
}
