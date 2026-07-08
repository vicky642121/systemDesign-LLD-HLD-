<?php

class PaymentService {
    public function processPayment(int $amount): string {
        return "Processing payment for: {$amount}. 💳";
    }
}