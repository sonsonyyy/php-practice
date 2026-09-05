<?php

declare(strict_types=1);

namespace App\SolidPrinciples\LiskovSubstitution;

use App\SolidPrinciples\LiskovSubstitution\PaymentGateway;

// Client Code
class CheckoutProcessor
{
    public function processOrder(PaymentGateway $gateway, float $totalAmount): void
    {
        // LSP-compliant: Works seamlessly for Stripe, COD, or any future gateway.
        $result = $gateway->processPaymet($totalAmount);

        if ($result->isSuccessful) {
            echo "Order successful: " . $result->message . PHP_EOL;
        }
    }
}
