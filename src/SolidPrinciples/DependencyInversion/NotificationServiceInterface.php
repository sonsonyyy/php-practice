<?php

declare(strict_types=1);

namespace App\SolidPrinciples\DependencyInversion;

interface NotificationServiceInterface
{
    public function send(string $message): void;
}
