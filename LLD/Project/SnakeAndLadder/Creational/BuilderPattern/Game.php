<?php

require_once __DIR__ . '../../../Models/Player.php';
require_once __DIR__ . '/../FactoryPattern/BoardElement.php';
require_once __DIR__ . '/../Singleton/Dice.php';

class Game
{
    public array $players = [];
    public array $snakes = [];
    public array $ladders = [];


    public function getPlayers(): array
    {
        return $this->players;
    }
    public function getSnakes(): array
    {
        return $this->snakes;
    }
    public function getLadders(): array
    {
        return $this->ladders;
    }
}
