<?php

class gameManager
{
    private static ?gameManager $instance = null;
    private int $score;   

    //create the lock door
    private function __construct()
    {
        $this->score = 0;

    }

    public static function getInstance(): gameManager
    {
        if(self::$instance === null)
        {
            self::$instance = new gameManager();
            return self::$instance;
        }
        return self::$instance;
    }

    public function startGame(): string
    {
        return "🎮 Game Started!";
    }

    public function getScore(): int
    {
        return $this->score;
    }

    public function addPoints(int $points): void
    {
        $this->score += $points;
    }
}