<?php

declare(strict_types=1);

namespace App\SolidPrinciples\InterfaceSegregation;

// Role-specific interface
interface EmailNotificationInterface
{
    public function sendEmail(string $recipient, string $body): void;
}
