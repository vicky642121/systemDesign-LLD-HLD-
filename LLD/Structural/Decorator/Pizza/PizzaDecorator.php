<?php

require_once __DIR__ . '/PizzaInterface.php';
require_once __DIR__ . '/PlainPizza.php';

abstract class PizzaDecorator implements PizzaInterface
{
    protected PizzaInterface $pizza;

    public function __construct(PizzaInterface $pizza)
    {
        $this->pizza = $pizza;
    }
}