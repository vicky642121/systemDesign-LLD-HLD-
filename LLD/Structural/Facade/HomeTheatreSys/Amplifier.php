<?php

class Amplifier
{

    public function setVolume(int $level): void
    {
        echo "🔊 Amplifier volume set to: {$level}\n";
    }

    public function turnOff(): void
    {
        echo "🔊 Amplifier OFF\n";
    }
}
