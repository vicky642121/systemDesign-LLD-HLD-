<?php

require_once __DIR__ . '/Command.php';
require_once __DIR__ . '/../../Creational/Singleton/Dice.php';
require_once __DIR__ . '/../../Models/Player.php';

class RollCommand implements Command
{
    private Player $player;
    private int $previousPosition;
    private int $newPosition;

    public function __construct(Player $player)
    {
        $this->player = $player;
    }

    public function execute(): void
    {
        $this->previousPosition = $this->player->getPosition();
        $dice = Dice::getInstance()->roll();
        $this->newPosition = $this->previousPosition + $dice;
        $this->player->setPosition($this->newPosition);
        echo "🎲 {$this->player->getName()} rolled → moved to {$this->newPosition}\n";
    }

    public function undo(): void
    {
        $this->player->setPosition($this->previousPosition);
        echo "↩️ Undo! {$this->player->getName()} back to {$this->previousPosition}\n";
    }
}
