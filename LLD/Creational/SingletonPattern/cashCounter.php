<?php

class cashCounter
{
    private static ?cashCounter $cashCounter = null;
    public int $increments;

    private function __construct()
    {
        $this->increments = 0;
    }

    public static function getInstance(): cashCounter
    {
        if (self::$cashCounter === null) {
            self::$cashCounter = new cashCounter();
        }
        return self::$cashCounter;
    }

    public function Increment(): void
    {
        $this->increments++;
    }

    public function getIncrements(): int
    {
        return $this->increments;
    }
}
