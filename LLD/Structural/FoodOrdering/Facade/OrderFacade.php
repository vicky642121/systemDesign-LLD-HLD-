<?php

require_once __DIR__ . '/DeliveryService.php';
require_once __DIR__ . '/PaymentService.php';
require_once __DIR__ . '/NotificationService.php';

class OrderFacade
{
    private DeliveryService $deliveryService;
    private PaymentService $paymentService;
    private NotificationService $notificationService;

    public function __construct()
    {
        $this->deliveryService = new DeliveryService();
        $this->paymentService = new PaymentService();
        $this->notificationService = new NotificationService();
    }

    public function placeOrder(string $item,float $amount): string
    {
        $orderDetails = "Order Details:  {$item}, Total Amount: {$amount}.";
        $paymentResult = $this->paymentService->processPayment($amount);
        $deliveryResult = $this->deliveryService->deliverOrder($item);
        $notificationResult = $this->notificationService->sendNotification($item);

        return "{$orderDetails}\n{$paymentResult}\n{$deliveryResult}\n{$notificationResult}";
    }
}