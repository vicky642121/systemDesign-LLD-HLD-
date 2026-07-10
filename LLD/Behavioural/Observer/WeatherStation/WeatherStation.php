<?php

require_once __DIR__ . '/ObserverInterface.php';
require_once __DIR__ . '/SubjectInterface.php';

class WeatherStation implements SubjectInterface
{
    private array $observers = [];
    private float $temperature;

    public function attach(ObserverInterface $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(ObserverInterface $observer): void
    {
        $index = array_search($observer, $this->observers);
        if ($index !== false) {
            unset($this->observers[$index]);
        }
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->temperature);
        }
    }

    public function setTemperature(float $temperature): void
    {
        $this->temperature = $temperature;
        $this->notify();
    }
}