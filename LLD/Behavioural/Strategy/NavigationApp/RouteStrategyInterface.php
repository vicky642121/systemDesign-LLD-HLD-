<?php


interface RouteStrategyInterface
{
    public function getRoute(string $from, string $to): void;
}