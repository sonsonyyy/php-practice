<?php

declare(strict_types=1);

namespace App\SolidPrinciples\DependencyInversion;

use App\SolidPrinciples\DependencyInversion\NotificationServiceInterface;

class EmailService implements NotificationServiceInterface
{
    public function send(string $message): void
    {
        echo "Sending Email: $message " . PHP_EOL;
    }
}
