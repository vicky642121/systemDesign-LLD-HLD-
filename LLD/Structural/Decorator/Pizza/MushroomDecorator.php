<?php

require_once __DIR__ . '/PizzaDecorator.php';

class MushroomDecorator extends PizzaDecorator
{
    public function getDescription(): string
    {
        return $this->pizza->getDescription() . ", Mushroom";
    }

    public function getCost(): float
    {
        return $this->pizza->getCost() + 30.00;
    }
}