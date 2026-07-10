<?php

require_once __DIR__ . '/RouteStrategyInterface.php';

class CarRoute implements RouteStrategyInterface
{
    public function getRoute(string $from, string $to): void
    {
        echo "🗺️ Navigating from $from to $to...\n";
        echo "🚗 Car Route: Take highway → 1 hour → 100 km\n";
    }
}