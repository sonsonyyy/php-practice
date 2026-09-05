<?php

declare(strict_types=1);

namespace App\SolidPrinciples\OpenClosed;

use App\SolidPrinciples\OpenClosed\NotificationChannelInterface;

class EmailChannel implements NotificationChannelInterface
{
    public function send(string $user, string $message): string
    {
        return "Email sent to {$user}: {$message}" . PHP_EOL;
    }
}
