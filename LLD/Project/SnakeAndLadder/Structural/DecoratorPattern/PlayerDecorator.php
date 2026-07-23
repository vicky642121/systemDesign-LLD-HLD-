<?php

require_once __DIR__ . '/../../Models/Player.php';

abstract class PlayerDecorator
{
    protected Player $player;

    public function __construct(Player $player)
    {
        $this->player = $player;
    }

    public function move(int $steps): void
    {
        $this->player->moveBy($steps);
    }

    public function getName(): string
    {
        return $this->player->getName();
    }

    public function getPosition(): int
    {
        return $this->player->getPosition();
    }
}
