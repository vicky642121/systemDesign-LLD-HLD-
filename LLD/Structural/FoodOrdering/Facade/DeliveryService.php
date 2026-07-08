<?php

class DeliveryService {
    public function deliverOrder(string $item): string {
        return "Arranging delivery for: {$item}. 🚚";
    }
}