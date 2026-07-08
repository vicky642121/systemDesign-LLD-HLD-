<?php

interface FoodOrderInterface {
    public function placeOrder(string $item, int $quantity): string;
}