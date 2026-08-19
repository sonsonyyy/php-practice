<?php

declare(strict_types=1);

namespace App\Oop\Interface;

use App\Oop\Interface\PaymentGatewayInterface;

// The Implementation (PayPal)
class PayPalGateway implements PaymentGatewayInterface
{
    // Fulfills the property contract using the explicit PHP 8.4 hook syntax
    public string $gatewayIdentifier {
        get => 'paypal_express';
    }

    // Fulfills the method contract.
    public function charge(float $amount): bool
    {
        echo "Connecting to PayPal Sandbox..." . PHP_EOL;
        echo "Charging $" . $amount . " " . self::CURRENCY . PHP_EOL;
        return true;
    }
}
