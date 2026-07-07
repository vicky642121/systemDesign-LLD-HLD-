<?php

require_once __DIR__ . '/PizzaDecorator.php';

class PepperoniDecorator extends PizzaDecorator
{
    public function getDescription(): string
    {
        return $this->pizza->getDescription() . ", Pepperoni";
    }

    public function getCost(): float
    {
        return $this->pizza->getCost() + 40.00;
    }
}