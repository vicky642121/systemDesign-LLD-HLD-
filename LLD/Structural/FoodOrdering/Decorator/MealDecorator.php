<?php

require_once __DIR__ . '/FoodItemInterface.php';

abstract class MealDecorator implements FoodItemInterface {
    protected FoodItemInterface $meal;

    public function __construct(FoodItemInterface $meal) {
        $this->meal = $meal;
    }
}