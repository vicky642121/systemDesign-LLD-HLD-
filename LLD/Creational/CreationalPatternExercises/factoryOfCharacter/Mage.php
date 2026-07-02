<?php

require_once __DIR__ . '/CharacterInterface.php';

class Mage implements CharacterInterface
{
    public function attack(): string
    {
        return "Mage attacks with a fireball!";
    }

    public function defend(): string
    {
        return "Mage defends with a magic shield!";
    }
}