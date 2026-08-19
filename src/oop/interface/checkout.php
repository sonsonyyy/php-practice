<?php

declare(strict_types=1);

namespace App\Oop\Interface;

use App\Oop\Interface\PaymentGatewayInterface;

// How it is used in real code (Polymorphism)
function checkoutProcessor(PaymentGatewayInterface $gateway, float $total): void
{
    echo "Processing checkout via: " . $gateway->gatewayIdentifier . PHP_EOL;

    // Check if charge is successful.
    if ($gateway->charge($total)) {
        echo "Success! Order completed using " . PaymentGatewayInterface::CURRENCY . PHP_EOL;
    }
}
