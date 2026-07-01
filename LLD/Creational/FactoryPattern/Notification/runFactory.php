<?php

require_once __DIR__ . '/NotificationFactory.php';

$n1 = NotificationFactory::createNotification("mobile");
$n1->send("Your order is confirmed! ✅");


// $n2 = NotificationFactory::createNotification("sms");
// $n2->send("Your OTP is 1234 🔐");

// $n3 = NotificationFactory::createNotification("push");
// $n3->send("Flash Sale starts now! 🔥");
