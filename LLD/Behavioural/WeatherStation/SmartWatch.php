<?php

require_once __DIR__ . '/ObserverInterface.php';

class SmartWatch implements ObserverInterface
{

    public function update(float $temperature): void
    {
        echo "⌚ Smart Watch: Current Temperature is {$temperature}°C\n";
    }
}