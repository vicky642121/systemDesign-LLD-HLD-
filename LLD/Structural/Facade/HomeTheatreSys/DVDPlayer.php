<?php

class DVDPlayer {

    public function play(string $movie):void {
        echo "📀 playing movie: {$movie}\n";
    }

    public function turnOff():void {
        echo "📀 DVD Player is OFF\n";
    }
}