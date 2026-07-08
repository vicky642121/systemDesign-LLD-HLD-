<?php

require_once __DIR__ . '/MealDecorator.php';

class DesertDecorator extends MealDecorator {

    public function getDescription(): string {
        return $this->meal->getDescription() . " + Dessert";
    }

    public function addprice(): float {
        return $this->meal->addprice() + 50.0;
    }
}