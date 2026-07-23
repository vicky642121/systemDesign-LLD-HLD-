<?php

require_once __DIR__ . '/BoardElement.php';
require_once __DIR__ . '../../../Models/Snake.php';
require_once __DIR__ . '../../../Models/Ladder.php';

class BoardElementFactory
{
    public static function CreateLadderSnake(string $type, int $start, int $end): BoardElement
    {
        switch ($type) {
            case 'snake':
                return new Snake($start,$end);
            case 'ladder':
                return new Ladder($start,$end);
            default:
                throw new InvalidArgumentException("Invalid type: " . $type);
        }
    }
}
