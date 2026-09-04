<?php

declare(strict_types=1);

namespace App\SolidPrinciples\DependencyInversion;

use App\SolidPrinciples\DependencyInversion\NotificationServiceInterface;

class SmsService implements NotificationServiceInterface
{
    public function send(string $message): void
    {
        echo "Sending SMS: $message " . PHP_EOL;
    }
}
