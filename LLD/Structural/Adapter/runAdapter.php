<?php
require_once __DIR__ . '/LoggerInterface.php';
require_once __DIR__ . '/MonoLogAdapter.php';
require_once __DIR__ . '/FileLogAdapter.php';

function saveActivity(LoggerInterface $logger, string $activity): void
{
    $logger->log($activity);
}

$logger = new MonoLogAdapter();
saveActivity($logger, "User logged in ✅");
saveActivity($logger, "Order placed 🛒");
saveActivity($logger, "Payment done 💳");


$fileLogger = new FileLogAdapter();
saveActivity($fileLogger, "User logged in ✅");
saveActivity($fileLogger, "Order placed 🛒");
saveActivity($fileLogger, "Payment done 💳");