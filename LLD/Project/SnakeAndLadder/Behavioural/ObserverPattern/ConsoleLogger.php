<?php

require_once __DIR__ . '/ObserverInterface.php';
require_once __DIR__ . '/../../Models/Player.php';

class ConsoleLogger implements Observer
{
    public function update(string $event, mixed $target): void
    {
        $name = $target instanceof Player ? $target->getName() : (string) $target;
        echo "📋 LOG: {$name} → {$event}\n";
    }
}
