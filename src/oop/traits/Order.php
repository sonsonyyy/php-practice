<?php

declare(strict_types=1);

namespace App\Oop\Traits;

use App\Oop\Traits\Loggable;

class Order
{
    use Loggable; // Inject trait

    public function createOrder(int $orderId, float $amount): void
    {
        // Business logic to create order...

        // Use the same trait method
        $this->logActivity('ORDER_CREATED', "Order #{$orderId} placed for \${$amount}");
    }
}
