<?php

declare(strict_types=1);

namespace App\Oop\Interface;

// The Interface (The Contract)
interface PaymentGatewayInterface
{
    // A CONSTANT: Must be public. Defines a universal rule for all gateways.
    public const CURRENCY = 'USD';

    // A PROPERTY: Must be public. Mandates that the gateway MUST expose
    // a publicly readable string identifier (e.g., 'airwallex', 'square', 'stripe' or 'paypal').
    public string $gatewayIdentifier { get; }

    // A METHOD: Must be public. Mandates how to process a payment amount.
    public function charge(float $amount): bool;
}
