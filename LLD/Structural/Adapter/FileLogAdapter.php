<?php

require_once __DIR__ . '/LoggerInterface.php';
require_once __DIR__ . '/FileLoggerLibrary.php';

class FileLogAdapter implements LoggerInterface
{
    private FileLoggerLibrary $fileLoggerLibrary;

    public function __construct()
    {
        $this->fileLoggerLibrary = new FileLoggerLibrary();
    }

    public function log(string $message): void
    {
        $this->fileLoggerLibrary->saveToFile($message);
    }
}