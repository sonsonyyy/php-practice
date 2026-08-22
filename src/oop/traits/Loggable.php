<?php

declare(strict_types=1);

namespace App\Oop\Traits;

trait Loggable
{
    public function logActivity(string $event, string $details = ''): void
    {
        $timestamp = date('Y-m-d H:i:s');
        $className = static::class;

        // In a real application, this would write to a log file or database
        echo "[{$timestamp}] [{$className}] Event: {$event} | Details: {$details}" . PHP_EOL;
    }
}
