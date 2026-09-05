<?php

declare(strict_types=1);

namespace App\SolidPrinciples\SingleResponsibility;

use App\SolidPrinciples\SingleResponsibility\UserRepository;
use App\SolidPrinciples\SingleResponsibility\MailerService;
use Exception;

class UserRegistrationService
{
    public function __construct(
        private UserRepository $userRepository,
        private MailerService $mailer
    ) {
    }

    /**
     * @param array{
     *  email: string,
     *  password: string
     * } $data
     */
    public function register(array $data): bool
    {
        // Simple validation; Note that you can extract this into another validator class.
        if (empty($data['email'] || empty($data['password']))) {
            throw new Exception("Invalid input.");
        }

        $passwordHash = password_hash($data['password'], PASSWORD_BCRYPT);

        // Delegate database saving
        $saved = $this->userRepository->save($data['email'], $passwordHash);

        // Delegate sending the email
        if ($saved) {
            $this->mailer->sendWelcomeEmail($data['email']);
        }

        return $saved;
    }
}
