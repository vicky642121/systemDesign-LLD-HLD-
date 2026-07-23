<?php

require_once __DIR__ . '/../../Creational/BuilderPattern/GameBuilder.php';
require_once __DIR__ . '/../../Creational/BuilderPattern/Game.php';
require_once __DIR__ . '/../../Creational/FactoryPattern/BoardElementFactory.php';
require_once __DIR__ . '/../../Creational/Singleton/Dice.php';
require_once __DIR__ . '/../../Models/Player.php';
require_once __DIR__ . '/../../Behavioural/ObserverPattern/GameEventNotifier.php';
require_once __DIR__ . '/../../Behavioural/ObserverPattern/ConsoleLogger.php';
require_once __DIR__ . '/../../Behavioural/ObserverPattern/ScoreTracker.php';

class GameFacade
{
    private Dice $dice;
    private Game $game;
    private GameEventNotifier $notifier;

    public function __construct()
    {
        $this->dice = Dice::getInstance();
        $this->game = new Game();
        $this->notifier = new GameEventNotifier();
        $this->notifier->attach(new ConsoleLogger());
        $this->notifier->attach(new ScoreTracker());
    }

    public function startGame(array $names): Game
    {
        $players = [];
        $moveSteps = [7, 70, 20];

        $snakes = [
            BoardElementFactory::CreateLadderSnake('snake', 99, 5),
            BoardElementFactory::CreateLadderSnake('snake', 70, 35),
        ];

        $ladders = [
            BoardElementFactory::CreateLadderSnake('ladder', 7, 45),
            BoardElementFactory::CreateLadderSnake('ladder', 20, 60),
        ];

        $this->game = new Game();
        $this->game->snakes = $snakes;
        $this->game->ladders = $ladders;

        foreach ($names as $index => $name) {
            $player = new Player($name);
            $players[] = $player;
            $this->game->players[] = $player;
            $this->notifier->notifyAll('Player joins game', $player);

            $steps = $moveSteps[$index] ?? 1;
            $player->moveBy($steps);
            $this->applyBoardEffects($player);
        }

        $gameBuilder = new GameBuilder();

        $this->game = $gameBuilder
            ->addPlayer($players)
            ->addSnake($snakes)
            ->addLadder($ladders)
            ->build();

        return $this->game;
    }

    private function applyBoardEffects(Player $player): void
    {
        foreach ($this->game->snakes as $snake) {
            if ($player->getPosition() === $snake->getStart()) {
                $player->setPosition($snake->apply($player->getPosition()));
                $this->notifier->notifyAll('Player hits Snake', $player);
                return;
            }
        }

        foreach ($this->game->ladders as $ladder) {
            if ($player->getPosition() === $ladder->getStart()) {
                $player->setPosition($ladder->apply($player->getPosition()));
                $this->notifier->notifyAll('Player hits Ladder', $player);
                return;
            }
        }
    }

    public function getGame(): Game
    {
        return $this->game;
    }
}