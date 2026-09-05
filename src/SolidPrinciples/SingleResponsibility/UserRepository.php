<?php

declare(strict_types=1);

namespace App\SolidPrinciples\SingleResponsibility;

class UserRepository
{
    public function save(string $email, string $password): bool
    {
        // Logic for saving user details to the database...
        echo "Saving user details: {$email} {$password}" . PHP_EOL;
        return true;
    }
}
