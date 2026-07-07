<?php

require_once __DIR__ . '/PizzaDecorator.php';

class OlivesDecorator extends PizzaDecorator
{
    public function getDescription(): string
    {
        return $this->pizza->getDescription() . ", Olives";
    }

    public function getCost(): float
    {
        return $this->pizza->getCost() + 20.00;
    }
}