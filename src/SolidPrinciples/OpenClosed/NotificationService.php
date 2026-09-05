<?php

declare(strict_types=1);

namespace App\SolidPrinciples\OpenClosed;

use App\SolidPrinciples\OpenClosed\NotificationChannelInterface;

class NotificationService
{
    // Open to receive ANY class that implements the interface
    public function notify(NotificationChannelInterface $channel, string $user, string $message): string
    {
        return $channel->send(user: $user, message: $message);
    }
}
