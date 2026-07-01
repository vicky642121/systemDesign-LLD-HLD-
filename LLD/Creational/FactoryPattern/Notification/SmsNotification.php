<?php

require_once __DIR__ . '/NotificationInterface.php';

class SmsNotification implements NotificationInterface
{
    public function send(string $message): void
    {
        echo "Sending SMS notification: " . $message;
    }
}