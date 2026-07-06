<?php

require_once __DIR__ . '/Tv.php';
require_once __DIR__ . '/DVDPlayer.php';
require_once __DIR__ . '/Lights.php';
require_once __DIR__ . '/Amplifier.php';

class HomeTheatreFacade
{
    private Tv $tv;
    private DVDPlayer $dvdPlayer;
    private Lights $lights;
    private Amplifier $amplifier;


    public function __construct()
    {
        $this->tv = new Tv();
        $this->dvdPlayer = new DVDPlayer();
        $this->lights = new Lights();
        $this->amplifier = new Amplifier();
    }

    public function watchMovie(string $movie): void
    {
        echo "🎬 Getting ready to watch {$movie}...\n";
        $this->tv->turnOn();
        $this->lights->dim();
        $this->amplifier->setVolume(20);
        $this->dvdPlayer->play($movie);
    }

    public function endMovie(): void
    {
        echo "🎬 Shutting down the home theatre...\n";
        $this->tv->turnOff();
        $this->lights->brighten();
        $this->amplifier->turnOff();
        $this->dvdPlayer->turnOff();
        echo "✅ Goodbye!\n";
    }
}
