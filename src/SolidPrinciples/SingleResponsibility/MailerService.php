<?php

declare(strict_types=1);

namespace App\SolidPrinciples\SingleResponsibility;

class MailerService
{
    public function sendWelcomeEmail(string $email): bool
    {
        $subject = "Welcome to Our Store!";
        $message = "Thank you for joining us.";
        $headers = "From: no-reply@store.com";

        echo "Sending welcome email to: {$email}" . PHP_EOL;
        return mail(
            to: $email,
            subject: $subject,
            message: $message,
            additional_headers: $headers
        );
    }
}
