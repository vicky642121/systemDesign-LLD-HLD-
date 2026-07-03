<?php
class FileLoggerLibrary
{
    public function saveToFile(string $message): void
    {
        echo "📁 FileLogger: {$message}\n";
    }
}
