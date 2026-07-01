<?php

require_once __DIR__ . '/AnimalInterface.php';

class Lion implements AnimalInterface
{
    public function speak(): string
    {
        return "Roar!";
    }

    public function describe(): string
    {
        return "majestic and powerful";
    }

    public function speed(): string
    {
        return "80 klm/h";
    }
}