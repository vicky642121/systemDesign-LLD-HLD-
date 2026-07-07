<?php

require_once __DIR__ . '/PizzaDecorator.php';

class CheesDecorator extends PizzaDecorator
{
    public function getDescription(): string
    {
        return $this->pizza->getDescription() . ", Cheese";
    }

    public function getCost(): float
    {
        return $this->pizza->getCost() + 50.00;
    }
}