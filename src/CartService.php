<?php

namespace cartvc\CartService;

class CartService
{
    public function calculateTotalPrice(array $items): float
    {
        $totalPrice = 0.0;

        foreach ($items as $item) {
            // Assuming each item has 'price' and 'quantity' properties
            $itemPrice = $item['price'] ?? 0;
            $itemQuantity = $item['quantity'] ?? 0;
            $totalPrice += ($itemPrice * $itemQuantity);
        }

        return $totalPrice;
    }
}
