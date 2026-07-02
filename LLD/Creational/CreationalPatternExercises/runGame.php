<?php

require_once __DIR__ . '/GameManager/gameManager.php';
require_once __DIR__ . '/buildCharacter/CharacterBuilder.php';
require_once __DIR__ . '/factoryOfCharacter/CharacterFactory.php';

//singleton pattern for game manager
$gameManager = gameManager::getInstance();
echo $gameManager->startGame()."\n";


//character creation using builder pattern
$characterBuilder = new CharacterBuilder();
$character = $characterBuilder->setName("Archer")
    ->setHealth(100)
    ->setWeapon("Bow")
    ->setLevel(5)
    ->setGender(1)
    ->setDress("Leather Armor")
    ->build();
    
echo $character->getSummary()."\n";


//character creation using factory pattern
$warrior = CharacterFactory::createCharacter('warrior');
echo $warrior->attack()."\n" , $warrior->defend()."\n";

$mage = CharacterFactory::createCharacter('mage');
echo $mage->attack()."\n" , $mage->defend()."\n";


$gameManager->addPoints(10);
echo "Current Score: " . $gameManager->getScore() . "\n";