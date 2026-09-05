<?php

declare(strict_types=1);

namespace App\SolidPrinciples\LiskovSubstitution;

use App\SolidPrinciples\LiskovSubstitution\PaymentGateway;
use App\SolidPrinciples\LiskovSubstitution\PaymentResult;

class StripeGateway implements PaymentGateway
{
    public function processPaymet(float $amount): PaymentResult
    {
        // API call success...
        return new PaymentResult(
            isSuccessful: true,
            transactionReference: "ch_123456",
            message: "Payment charged immediately via Stripe."
        );
    }
}
