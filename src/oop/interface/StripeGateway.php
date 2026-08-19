<?php

declare(strict_types=1);

namespace App\Oop\Interface;

use App\Oop\Interface\PaymentGatewayInterface;

// The Implementation (Stripe)
class StripeGateway implements PaymentGatewayInterface
{
    // Fulfills the property contract. It is public and readable.
    // We can use PHP's readonly modifier or property hooks to satisfy { get; }
    public function __construct(public readonly string $gatewayIdentifier = 'stripe_v3')
    {
    }

    // Fulfills the method contract.
    public function charge(float $amount): bool
    {
        echo "Connecting to Stripe API..." . PHP_EOL;
        echo "Charging $" . $amount . " " . self::CURRENCY . PHP_EOL;
        return true;
    }
}
