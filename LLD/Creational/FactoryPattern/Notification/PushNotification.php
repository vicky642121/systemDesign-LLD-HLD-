<?php

require_once __DIR__ . '/NotificationInterface.php';

class PushNotification implements NotificationInterface
{
    public function send(string $message): void
    {
        echo "Sending Push notification: " . $message;
    }
}