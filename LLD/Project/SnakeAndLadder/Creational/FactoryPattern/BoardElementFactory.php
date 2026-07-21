<?php

require_once __DIR__ . '/BoardElement.php';
require_once __DIR__ . '/SnakeFactory.php';
require_once __DIR__ . '/LadderFactory.php';

class BoardElementFactory
{
    public static function CreateLadderSnake(string $type, int $start, int $end): BoardElement
    {
        switch ($type) {
            case 'snake':
                return new SnakeFactory($start,$end);
            case 'ladder':
                return new LadderFactory($start,$end);
            default:
                throw new InvalidArgumentException("Invalid type: " . $type);
        }
    }
}
