<?php

class MonoLogLibrary
{
    public function writeLog(string $message): void
    {
        echo "📝 Monolog: {$message}\n";
    }
}
