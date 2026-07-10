<?php

require_once __DIR__ . '/WeatherStation.php';
require_once __DIR__ . '/PhoneDisplay.php';
require_once __DIR__ . '/TVDisplay.php';
require_once __DIR__ . '/SmartWatch.php';

$station = new WeatherStation();

$phone = new PhoneDisplay();
$tv    = new TVDisplay();
$watch = new SmartWatch();

$station->attach($phone);
$station->attach($tv);
$station->attach($watch);

$station->setTemperature(28.5);
$station->setTemperature(35.0);

$station->detach($tv);

$station->setTemperature(22.0);