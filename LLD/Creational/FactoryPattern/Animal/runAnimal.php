<?php
require_once __DIR__ .'/ZooFactory.php';

$a1 = ZooFactory::createAnimal('dog');

echo "Dog says: " . $a1->speak() . "\n";
echo "Dog is: " . $a1->describe() . "\n";
echo "Dog speed: " . $a1->speed() . "\n";