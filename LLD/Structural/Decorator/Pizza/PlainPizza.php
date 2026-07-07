<?php

require_once __DIR__ . '/PizzaInterface.php';

class PlainPizza implements PizzaInterface
{
    public function getDescription(): string
    {
        return "Plain Pizza";
    }

    public function getCost(): float
    {
        return 200.00;
    }
}