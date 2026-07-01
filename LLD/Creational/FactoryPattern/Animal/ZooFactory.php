<?php

require_once __DIR__ . '/AnimalInterface.php';
require_once __DIR__ . '/Dog.php';
require_once __DIR__ . '/Lion.php';

class ZooFactory
{
    public static function createAnimal(string $type): AnimalInterface
    {
        switch ($type) {
            case 'dog':
                return new Dog();
            case 'lion':
                return new Lion();
            default:
                throw new InvalidArgumentException("Invalid animal type: " . $type);
        }
    }
}