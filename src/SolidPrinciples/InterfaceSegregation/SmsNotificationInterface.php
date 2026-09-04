<?php

declare(strict_types=1);

namespace App\SolidPrinciples\InterfaceSegregation;

// Role-specific interface
interface SmsNotificationInterface
{
    public function sendSms(string $phoneNumber, string $text): void;
}
