<?php

declare(strict_types=1);

namespace App\SolidPrinciples\DependencyInversion;

use App\SolidPrinciples\DependencyInversion\NotificationServiceInterface;

class OrderProcessor
{
    private NotificationServiceInterface $notifier;

    // Dependency Injection: Expects an abstraction, not a concrete class
    public function __construct(NotificationServiceInterface $notifier)
    {
        $this->notifier = $notifier;
    }

    public function processOrder(int $orderId): void
    {
        // Core business logic here
        echo "Processing Order #{$orderId}..." . PHP_EOL;

        // Agnostic call to interface contract
        $this->notifier->send("Order #{$orderId} has been placed.");
    }
}
