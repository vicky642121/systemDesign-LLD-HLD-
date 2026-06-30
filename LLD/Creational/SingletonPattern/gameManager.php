<?php

class GameManager
{

    private static ?GameManager $gameManager = null;
    private int $score;

    private function __construct()
    {
        $this->score = 0;
    }

    public static function getInstance(): GameManager
    {

        if (self::$gameManager === null) {
            self::$gameManager = new GameManager();
        }
        return self::$gameManager;
    }

    public function getScore(): int
    {
        return $this->score;
    }
    public function setScore(int $score): void
    {
        $this->score = $score;
    }
}
