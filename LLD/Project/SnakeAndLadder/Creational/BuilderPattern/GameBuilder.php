<?php

require_once __DIR__ . '/Game.php';
require_once __DIR__ . '/../FactoryPattern/BoardElementFactory.php';
require_once __DIR__ . '/../Singleton/Dice.php';

class GameBuilder
{

    private Game $game;

    public function __construct()
    {
        $this->game = new Game();
    }

    public function addPlayer(array $players): GameBuilder
    {
        foreach ($players as $player) {
            $this->game->players[] = $player;
        }
        return $this;
    }

    public function addSnake(array $snakes): GameBuilder
    {
        foreach ($snakes as $snake) {
            $this->game->snakes[] = $snake;
        }
        return $this;
    }

    public function addLadder(array $ladders): GameBuilder
    {
        foreach ($ladders as $ladder) {
            $this->game->ladders[] = $ladder;
        }
        return $this;
    }


    public function build(): Game
    {
        return $this->game;
    }
}
