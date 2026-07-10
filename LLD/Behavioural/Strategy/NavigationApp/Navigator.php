<?php

class Navigator{

    private RouteStrategyInterface $routeStrategyInterface;

    public function __construct(RouteStrategyInterface $routeStrategyInterface)
    {
        $this->routeStrategyInterface = $routeStrategyInterface;
    }

    public function setStrategy(RouteStrategyInterface $routeStrategyInterface): void{
        $this->routeStrategyInterface = $routeStrategyInterface;
    }
    
    public function navigate(string $from, string $to): void{
        $this->routeStrategyInterface->getRoute($from, $to);
    }
}