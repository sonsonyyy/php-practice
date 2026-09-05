<?php

declare(strict_types=1);

namespace App\SolidPrinciples\OpenClosed;

interface NotificationChannelInterface
{
    public function send(string $user, string $message): string;
}
