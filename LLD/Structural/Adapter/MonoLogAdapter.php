<?php

require_once __DIR__ . '/LoggerInterface.php';
require_once __DIR__ . '/MonoLogLibrary.php';

class MonoLogAdapter implements LoggerInterface
{
    private MonoLogLibrary $monoLogLibrary;

    public function __construct()
    {
        $this->monoLogLibrary = new MonoLogLibrary();
    }

    public function log(string $message): void
    {
        $this->monoLogLibrary->writeLog($message);
    }
}