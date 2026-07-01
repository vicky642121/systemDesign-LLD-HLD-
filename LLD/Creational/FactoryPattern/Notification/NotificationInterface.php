<?php

interface NotificationInterface
{
    public function send(string $message): void;
}
