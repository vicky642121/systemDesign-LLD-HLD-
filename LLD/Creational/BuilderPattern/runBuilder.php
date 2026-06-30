<?php
require_once __DIR__ . '/builderBurger.php';

$burgerBuilder = new BurgerBuilder();

// $burgerBuilder->setBun("Whole Wheat")
// ->setPatty("Beef")
// ->addCheese()
// ->addSauce("Mayo")
// ->setName("Vicky");

// $burger = $burgerBuilder->build();

// $burgerBuilder2 = new BurgerBuilder();

// $burgerBuilder2->setBun("Multigrain")
// ->setPatty("Chicken")
// ->addSauce("Ketchup")
// ->setName("Naveen");

// $burger2 = $burgerBuilder2->build();


$burgerBuilder->setBun("Whole Wheat")
    ->setPatty("Beef")
    ->addCheese()
    ->setToppings(["Lettuce", "Tomato", "Onion"])
    ->addSauce("Mayo")
    ->setName("Vicky")
    ->setSize(2);
    // ->setQuantity(1);

$burger = $burgerBuilder->build();

var_dump($burger->orderCall());
