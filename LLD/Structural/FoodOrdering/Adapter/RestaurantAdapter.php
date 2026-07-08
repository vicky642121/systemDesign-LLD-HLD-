<?php

require_once __DIR__ . '/FoodOrderInterface.php';
require_once __DIR__ . '/OldRestaurantAPI.php';

class RestaurantAdapter implements FoodOrderInterface
{
    
    private OldRestaurantAPI $oldRestaurantAPI;

    public function __construct()
    {
        $this->oldRestaurantAPI = new OldRestaurantAPI();
    }

    public function placeOrder(string $item, int $quantity): string
    {
        return $this->oldRestaurantAPI->sendFoodRequest($item, $quantity);
    }
}
