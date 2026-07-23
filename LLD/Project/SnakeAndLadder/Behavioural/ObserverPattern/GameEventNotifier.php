<?php

require_once __DIR__ . '/ObserverInterface.php';
require_once __DIR__ . '/../../Models/Player.php';

class GameEventNotifier
{
    private array $observers = [];

    public function attach(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    public function notifyAll(string $event, mixed $target): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($event, $target);
        }
    }
}
