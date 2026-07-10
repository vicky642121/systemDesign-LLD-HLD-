<?php

interface ObserverInterface
{
    public function update(float $temperature): void;
}