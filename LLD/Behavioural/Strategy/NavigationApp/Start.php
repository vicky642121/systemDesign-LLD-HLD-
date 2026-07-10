<?php

require_once __DIR__ .'/Navigator.php';
require_once __DIR__ .'/CarRoute.php';
require_once __DIR__ .'/BikeRoute.php';
require_once __DIR__ .'/WalkingRoute.php';

$navigator = new Navigator(new CarRoute());
$navigator->navigate("Chennai", "Madurai");

// Swap to Bike
$navigator->setStrategy(new BikeRoute());
$navigator->navigate("Chennai", "Madurai");


// Swap to Walking
$navigator->setStrategy(new WalkingRoute());
$navigator->navigate("Chennai", "Madurai");