<?php

declare(strict_types=1);

namespace App\SolidPrinciples\InterfaceSegregation;

// High-level service depends strictly on what it needs
class UserRegistrationService
{
    public function __construct(
        private EmailNotificationInterface $emailSender
    ) {
    }

    /**
     * @param array{
     *  email: string,
     *  password: string
     * } $userData
     */
    public function registerUser(array $userData): void
    {
        // Save user to database...

        // Sender only contractually exposes sendEmail()
        $this->emailSender->sendEmail($userData['email'], "Welcome!");
    }
}
