<?php

require_once __DIR__ . '/Burger.php';

class BurgerBuilder
{

    private Burger $burger;

    public function __construct()
    {
        $this->burger = new Burger();
    }

    public function setBun(string $bun): BurgerBuilder
    {
        $this->burger->bun = $bun;
        return $this;
    }

    public function setPatty(string $patty): BurgerBuilder
    {
        $this->burger->patty = $patty;
        return $this;
    }

    public function addCheese(): BurgerBuilder
    {
        $this->burger->cheese = true;
        return $this;
    }

    public function addSauce(string $sauce): BurgerBuilder
    {
        $this->burger->sauce[] = $sauce;
        return $this;
    }

    public function setName(string $name): BurgerBuilder
    {
        $this->burger->name = $name;
        return $this;
    }

    public function setSize(int $size): BurgerBuilder
    {
        $sizeMeasurement = [1,2,3];

        if (!in_array($size, $sizeMeasurement)) {
            throw new Exception("Invalid size. Please choose Small, Medium, or Large.");
        }
        $this->burger->size =$size;
        return $this;
    }

    public function setToppings(array $toppings): BurgerBuilder
    {
        $this->burger->toppings = $toppings;
        return $this;
    }

    public function setQuantity(int $quantity): BurgerBuilder
    {
        $this->burger->quantity = $quantity;
        return $this;
    }

    public function build(): Burger
    {
        if (empty($this->burger->bun)) {
            throw new Exception("Bun is required.");
        }
        if (empty($this->burger->size)) {
            throw new Exception("Size is required.");
        }
        return $this->burger;
    }
}
