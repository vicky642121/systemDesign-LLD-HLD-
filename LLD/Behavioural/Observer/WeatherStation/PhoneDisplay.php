<?php

require_once __DIR__ . '/ObserverInterface.php';

class PhoneDisplay implements ObserverInterface
{

    public function update(float $temperature): void
    {
        echo "📱 Phone Display: Current Temperature is {$temperature}°C\n";
    }
}
