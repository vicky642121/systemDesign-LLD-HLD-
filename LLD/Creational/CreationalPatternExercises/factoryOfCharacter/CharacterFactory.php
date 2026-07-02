<?php

require_once __DIR__ . '/CharacterInterface.php';
require_once __DIR__ . '/Warrior.php';
require_once __DIR__ . '/Mage.php';

class CharacterFactory
{
    public static function createCharacter(string $type): CharacterInterface
    {
        switch ($type) {
            case 'warrior':
                return new Warrior();
            case 'mage':
                return new Mage();
            default:
                throw new InvalidArgumentException("Invalid character type");
        }
    }
}