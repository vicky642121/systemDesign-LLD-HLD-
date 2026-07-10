<?php

require_once __DIR__ . '/RouteStrategyInterface.php';

class WalkingRoute implements RouteStrategyInterface
{
    public function getRoute(string $from, string $to): void
    {
        echo "🗺️ Navigating from $from to $to...\n";
        echo "🚶 Walking Route: Take footpath → 3 hours → 15 km\n";
    }
}