<?php

class NotificationService {
    public function sendNotification(string $item): string {
        return "Sending order confirmation for: {$item}. 📢";
    }
}