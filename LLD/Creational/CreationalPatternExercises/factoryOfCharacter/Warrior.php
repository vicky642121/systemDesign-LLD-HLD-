<?php

require_once __DIR__ . '/CharacterInterface.php';

class Warrior implements CharacterInterface
{
    public function attack(): string
    {
        return "Warrior attacks with a sword!";
    }

    public function defend(): string
    {
        return "Warrior defends with a shield!";
    }
}