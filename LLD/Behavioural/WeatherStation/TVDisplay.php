<?php

require_once __DIR__ . '/ObserverInterface.php';

class TVDisplay implements ObserverInterface
{

    public function update(float $temperature): void
    {
        echo "📺 TV Display: Current Temperature is {$temperature}°C\n";
    }
}
