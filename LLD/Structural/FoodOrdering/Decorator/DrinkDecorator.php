<?php

require_once __DIR__ . '/MealDecorator.php';

class DrinkDecorator extends MealDecorator{


    public function getDescription(): string {
        return $this->meal->getDescription() . " + Drink";
    }

    public function addprice(): float {
        return  $this->meal->addprice() + 40.0;
    }
}