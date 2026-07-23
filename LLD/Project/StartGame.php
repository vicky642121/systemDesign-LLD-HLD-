<?php

require_once __DIR__ . '/SnakeAndLadder/Creational/Singleton/Dice.php';
require_once __DIR__ . '/SnakeAndLadder/Creational/FactoryPattern/BoardElementFactory.php';
require_once __DIR__ . '/SnakeAndLadder/Creational/BuilderPattern/GameBuilder.php';
require_once __DIR__ . '/SnakeAndLadder/Structural/FacadePattern/GameFacade.php';
require_once __DIR__ . '/SnakeAndLadder/Models/Player.php';
require_once __DIR__ . '/SnakeAndLadder/Structural/DecoratorPattern/PlayerDecorator.php';
require_once __DIR__ . '/SnakeAndLadder/Structural/DecoratorPattern/BonusRollDecorator.php';
require_once __DIR__ . '/SnakeAndLadder/Structural/DecoratorPattern/ShieldDecorator.php';
require_once __DIR__ . '/SnakeAndLadder/Behavioural/StrategyPattern/MovementStrategy.php';
require_once __DIR__ . '/SnakeAndLadder/Behavioural/StrategyPattern/NormalMove.php';
require_once __DIR__ . '/SnakeAndLadder/Behavioural/StrategyPattern/PowerMove.php';
require_once __DIR__ . '/SnakeAndLadder/Behavioural/StrategyPattern/PenaltyMove.php';
require_once __DIR__ . '/SnakeAndLadder/Behavioural/StrategyPattern/PlayerMovement.php';
require_once __DIR__ . '/SnakeAndLadder/Behavioural/CommandPattern/RollCommand.php';
require_once __DIR__ . '/SnakeAndLadder/Behavioural/CommandPattern/GameInvoker.php';

//start the game
echo "=== 🧩 FACADE + OBSERVER PATTERN ===\n";
$players = new GameFacade();
$players->startGame(['vicky','naveen','sankar']);

echo "\n=== 🧱 DECORATOR PATTERN ===\n";
$bonusPlayer = new BonusRollDecorator(new Player('Rahul'));
$bonusPlayer->move(5);

$shieldPlayer = new ShieldDecorator(new Player('naveen'));
$shieldPlayer->move(5);

echo "\n=== 🎯 STRATEGY PATTERN ===\n";
$movement = new PlayerMovement(new NormalMove());
echo 'Normal move: ' . $movement->move(10, 4) . PHP_EOL;
$movement->setStrategy(new PowerMove());
echo 'Power move: ' . $movement->move(10, 4) . PHP_EOL;
$movement->setStrategy(new PenaltyMove());
echo 'Penalty move: ' . $movement->move(10, 4) . PHP_EOL;

echo "\n=== 🎮 COMMAND PATTERN ===\n";
$player = new Player('Rahul');
$invoker = new GameInvoker();
$command = new RollCommand($player);
$invoker->execute($command);
$invoker->undoLast();