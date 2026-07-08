<?php

require_once __DIR__ . '/MealDecorator.php';

class ExtraSauceDecorator extends MealDecorator {

    public function getDescription(): string {
        return $this->meal->getDescription() . " + Sauce";
    }

    public function addprice(): float {
        return $this->meal->addprice() + 20.0;
    }
}