<?php

require_once __DIR__ . '/SnakeAndLadder/Creational/Singleton/Dice.php';
require_once __DIR__ . '/SnakeAndLadder/Creational/FactoryPattern/BoardElementFactory.php';
require_once __DIR__ . '/SnakeAndLadder/Creational/BuilderPattern/GameBuilder.php';

//dice created
$dice = Dice::getInstance();


//snake and ladder created
$snake1  = BoardElementFactory::CreateLadderSnake('snake', 99, 5);
$snake2  = BoardElementFactory::CreateLadderSnake('snake', 70, 35);
$ladder1 = BoardElementFactory::CreateLadderSnake('ladder', 7, 45);
$ladder2 = BoardElementFactory::CreateLadderSnake('ladder', 20, 60);


//build the game;
$gameBuild = new GameBuilder();

$gameBuild->addPlayer(['vicky', 'naveen', 'sankar'])
            ->addSnake([$snake1, $snake2])
            ->addLadder([$ladder1, $ladder2])
            ->build();
