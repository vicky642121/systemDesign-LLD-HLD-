<?php

class Burger
{

    public string $bun = "";
    public string $patty = "";
    public array $sauce = [];
    public bool  $cheese = false;
    public string $name = "Customer";
    public string $size = '';
    public array $toppings = [];
    public int $quantity = 1;
    public array $sizeMeasurement = [1 => ["size" => "Small", "price" => 150], 2 => ["size" => "Medium", "price" => 250], 3 => ["size" => "Large", "price" => 350]];
    public int $cheesePrice = 50;
    public int $toppingsPrice = 30;

    public function BurgerRate(int $quantity, int $size): int {

        $toppingsPrice = count($this->toppings) * $this->toppingsPrice;
        $cheesePrice = $this->cheese ? $this->cheesePrice : 0;
        $sizePrice = $this->sizeMeasurement[$size]['price'] ?? 0;

        return ($toppingsPrice + $cheesePrice + $sizePrice) * $quantity;
    }

    public function getsize(int $size): string
    {
        return $this->sizeMeasurement[$size]['size'] ?? "Unknown";
    }

    public function orderCall(): string
    {
        return "🍔 Burger for {$this->name}\n
                Size: {$this->getsize($this->size)}\n
                Bun: {$this->bun}\n
                Patty: {$this->patty}\n
                Sauce: " . implode(", ", $this->sauce) . "\n
                Cheese: " . ($this->cheese ? "Yes" : "No") . "\n
                Toppings: " . implode(", ", $this->toppings) . "\n
                Price per pizza: {$this->sizeMeasurement[$this->size]['price']}\n
                Quantity: {$this->quantity}\n
                Total Price: " . $this->BurgerRate($this->quantity, $this->size) . "\n
                Enjoy your meal! 🍔
        ";
        // return "Hello {$this->name},Your order is ready with {$this->bun} bun, {$this->patty} patty, ".implode(",",$this->sauce)." sauce and cheese is ".($this->cheese ? "added" : "not added")." and size is {$this->size}.\n Enjoy your meal!";
    }
}
