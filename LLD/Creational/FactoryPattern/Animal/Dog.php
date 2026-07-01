<?php

require_once __DIR__ . '/AnimalInterface.php';

class Dog implements AnimalInterface
{
    public function speak(): string
    {
        return "Woof!";
    }

    public function describe(): string
    {
        return "loyal and friendly";
    }

    public function speed(): string
    {
        return "20 klm/h";
    }
}