<?php

declare(strict_types=1);

namespace App\Oop\Abstraction;

class PayPal extends PaymentGateway
{
    #[\Override]
    public function processPayment(): void
    {
        echo "Actual custom implementation details here\n";
    }
}
