<?php

require_once __DIR__ . '/NotificationInterface.php';

class MobileNotification implements NotificationInterface
{
    public function __construct()
    {
        echo "MobileNotification instance created.\n";
    }
    public function send(string $message): void
    {
        echo "Sending Mobile notification: " . $message;
    }
}