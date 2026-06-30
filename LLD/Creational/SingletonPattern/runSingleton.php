<?php
// require_once __DIR__ . '/SingletonPattern.php';

// $principal = SchoolPrincipal::getInstance();
// echo "\n" . $principal->getName() . PHP_EOL;


####################################################

//run the singleton pattern for game manager
// require_once __DIR__ . '/gameManager.php';

// $gameManager = GameManager::getInstance();
// $gameManager2 = GameManager::getInstance();
// $gameManager->setScore(100);
// $gameManager2->setScore(200);
// var_dump($gameManager->getScore(),$gameManager2->getScore());

################################################

//run the singleton pattern for cash counter
// require_once __DIR__ . '/cashCounter.php';

// $c1 = cashCounter::getInstance();
// $c2 = cashCounter::getInstance();


// $c1->Increment();
// $c1->Increment();
// $c2->Increment();

// var_dump($c1->getIncrements());

################################################
//run the singleton pattern for configuration manager
require_once __DIR__ . '/configurationManager.php';

$config1 = ConfigurationManager::getInstance();
$config2 = ConfigurationManager::getInstance();
$copy = clone ConfigurationManager::getInstance();// we need to implement __clone method to avoid cloning of singleton class

$config1->setConfiguration('theme', 'dark');
$config1->setConfiguration('language', 'Tamil');

var_dump($config1== $copy);