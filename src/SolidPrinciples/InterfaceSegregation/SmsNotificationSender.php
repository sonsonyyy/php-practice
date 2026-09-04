<?php

declare(strict_types=1);

namespace App\SolidPrinciples\InterfaceSegregation;

use App\SolidPrinciples\InterfaceSegregation\SmsNotificationInterface;

// Dedicated SMS Sender only implements what it uses
class SmsNotificationSender implements SmsNotificationInterface
{
    public function sendSms(string $phoneNumber, string $text): void
    {
        // Send SMS logic using an API like Twilio...
        echo "Sending SMS using Twilio..." . PHP_EOL;
        echo "Sending SMS to {$phoneNumber}: {$text}" . PHP_EOL;
    }
}
