<?php

declare(strict_types=1);

namespace App\SolidPrinciples\OpenClosed;

use App\SolidPrinciples\OpenClosed\NotificationChannelInterface;

class SmsChannel implements NotificationChannelInterface
{
    public function send(string $user, string $message): string
    {
        return "SMS sent to {$user}: {$message}" . PHP_EOL;
    }
}
