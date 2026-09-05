<?php

declare(strict_types=1);

namespace App\SolidPrinciples\LiskovSubstitution;

readonly class PaymentResult
{
    public function __construct(
        public bool $isSuccessful,
        public string $transactionReference,
        public string $message
    ) {
    }
}
