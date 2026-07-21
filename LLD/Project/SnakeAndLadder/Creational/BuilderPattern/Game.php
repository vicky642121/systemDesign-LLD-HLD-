<?php

require_once __DIR__ . '/../FactoryPattern/BoardElement.php';
require_once __DIR__ . '/../Singleton/Dice.php';

class Game
{
    public array $players = [];
    public array $snakes = [];
    public array $ladders = [];
}
