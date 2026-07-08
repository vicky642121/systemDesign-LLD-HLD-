<?php
class OldRestaurantAPI {
    public function sendFoodRequest(string $item, int $quantity): string {
        return "🍔 Old API: {$quantity}x {$item} request sent!";
    }
}