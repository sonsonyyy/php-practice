<?php

declare(strict_types=1);

/**
 * Abstraction hides complex background implementation details
 * and reveals only the necessary interface to the user.
 *
 * In PHP, this is built using `Abstract Class`.
 * - Abstract classes cannot be instantiated on their own.
 * - The can contain abstract methods, which declare a template signature but
 * contain no code body. Any child class must provide the actual method implementation.
 */
abstract class PaymentGateway
{
    abstract protected function processPayment(): string; // Blueprint only
}

class PayPal extends PaymentGateway
{
    #[Override]
    public function processPayment(): string
    {
        return "Actual custom implementation details here";
    }
}
