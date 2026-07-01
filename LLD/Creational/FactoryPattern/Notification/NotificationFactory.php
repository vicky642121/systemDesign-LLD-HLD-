<?php

require_once __DIR__ . '/MobileNotification.php';
require_once __DIR__ . '/SmsNotification.php';
require_once __DIR__ . '/PushNotification.php';
require_once __DIR__ . '/NotificationInterface.php';

class NotificationFactory
{
    public static function createNotification(string $type): NotificationInterface
    {
        switch ($type) {
            case 'sms':
                return new SmsNotification();
            case 'push':
                return new PushNotification();
            case 'mobile':
                return new MobileNotification();
            default:
                throw new InvalidArgumentException("Invalid notification type: " . $type);
        }
    }
}
