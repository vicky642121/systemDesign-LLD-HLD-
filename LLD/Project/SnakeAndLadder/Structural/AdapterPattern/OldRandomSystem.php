<?php

class OldRandomSystem
{
    public function generateNumber(int $min, int $max): int
    {
        return rand($min, $max);
    }
}
