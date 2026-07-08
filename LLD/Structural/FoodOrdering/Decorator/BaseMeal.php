<?php

require_once __DIR__ . '/FoodItemInterface.php';

class BaseMeal implements FoodItemInterface {
    public function orderFood(string $item, int $quantity): string {
        return "🍔 BaseMeal ordered!";
    }
    
    public function getDescription(): string {
        return "Base Meal";
    }

    public function addprice(): float {
        return 150.0;
    }
}