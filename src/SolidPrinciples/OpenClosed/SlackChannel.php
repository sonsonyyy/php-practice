<?php

declare(strict_types=1);

namespace App\SolidPrinciples\OpenClosed;

use App\SolidPrinciples\OpenClosed\NotificationChannelInterface;

class SlackChannel implements NotificationChannelInterface
{
    public function send(string $user, string $message): string
    {
        return "Slack message posted to {$user}'s channel: {$message}" . PHP_EOL;
    }
}
