<?php

class Dice
{
    private static ?Dice $instance = null;

    private function __construct()
    {
        echo "Instance Created" . "\n";
    }

    public function __wakeup() {}

    public function __clone() {}

    public static function getInstance(): Dice
    {
        if (self::$instance == null) {
            self::$instance = new Dice();
        }

        return self::$instance;
    }

    public function roll(): int
    {
        return rand(1, 6);
    }
}
