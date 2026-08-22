<?php

declare(strict_types=1);

namespace App\Oop\Traits;

use App\Oop\Traits\Loggable;

class User
{
    use Loggable; // Inject trait

    public function register(string $email): void
    {
        // Add business logic to register a user...

        // Use the trait's method
        $this->logActivity('USER_REGISTERED', "User registered with email: {$email}");
    }
}
