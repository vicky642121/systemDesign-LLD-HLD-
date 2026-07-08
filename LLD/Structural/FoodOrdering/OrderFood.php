<?php

require_once __DIR__ . '/Adapter/RestaurantAdapter.php';
require_once __DIR__ . '/Decorator/BaseMeal.php';
require_once __DIR__ . '/Decorator/DrinkDecorator.php';
require_once __DIR__ . '/Decorator/DesertDecorator.php';
require_once __DIR__ . '/Decorator/ExtraSauceDecorator.php';
require_once __DIR__ . '/Facade/OrderFacade.php';

echo "=== 🔌 ADAPTER ===\n";
$restaurant = new RestaurantAdapter();
echo $restaurant->placeOrder("Burger", 2) . "\n";
echo $restaurant->placeOrder("Pizza", 1) . "\n";


echo "\n=== 🎨 DECORATOR ===\n";
$meal = new BaseMeal();
echo $meal->getDescription() . " → ₹" . $meal->addprice() . "\n";

$meal = new DrinkDecorator($meal);
echo $meal->getDescription() . " → ₹" . $meal->addprice() . "\n";

$meal = new DesertDecorator($meal);
echo $meal->getDescription() . " → ₹" . $meal->addprice() . "\n";

$meal = new ExtraSauceDecorator($meal);
echo $meal->getDescription() . " → ₹" . $meal->addprice() . "\n";


echo "\n=== 🏛️ FACADE ===\n";
$order = new OrderFacade();

// echo $order->placeOrder("Burger Meal", 299.00);
echo $order->placeOrder($meal->getDescription(), $meal->addprice());
