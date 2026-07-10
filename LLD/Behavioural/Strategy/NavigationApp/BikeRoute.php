<?php

    require_once __DIR__ . '/RouteStrategyInterface.php';

class BikeRoute implements RouteStrategyInterface
{
    public function getRoute(string $from, string $to): void
    {
        echo "🗺️ Navigating from $from to $to...\n";
        echo "🚲 Bike Route: Take cycle path → 2 hours → 20 km\n";
    }
}