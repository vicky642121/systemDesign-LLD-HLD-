<?php

require_once __DIR__ . '/PlainPizza.php';
require_once __DIR__ . '/CheesDecorator.php';
require_once __DIR__ . '/MushroomDecorator.php';
require_once __DIR__ . '/OlivesDecorator.php';
require_once __DIR__ . '/PepperoniDecorator.php';

$pizza = new PlainPizza();
echo "Description: " . $pizza->getDescription() . "-> ₹" . $pizza->getCost() . "\n";

$cheese = new CheesDecorator($pizza);
echo $cheese->getDescription() . " → ₹" . $cheese->getCost() . "\n";

// Add mushroom
$mushroom = new MushroomDecorator($cheese);
echo $mushroom->getDescription() . " → ₹" . $mushroom->getCost() . "\n";

// Add olives
$olives = new OlivesDecorator($mushroom);
echo $olives->getDescription() . " → ₹" . $olives->getCost() . "\n";

// Add pepperoni
$pepperoni = new PepperoniDecorator($olives);
echo $pepperoni->getDescription() . " → ₹" . $pepperoni->getCost() . "\n";