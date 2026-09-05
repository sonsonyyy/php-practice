<?php

declare(strict_types=1);

namespace App\SolidPrinciples\LiskovSubstitution;

use App\SolidPrinciples\LiskovSubstitution\PaymentGateway;
use App\SolidPrinciples\LiskovSubstitution\PaymentResult;

class CashOnDeliveryGateway implements PaymentGateway
{
    public function processPaymet(float $amount): PaymentResult
    {
        // COD handles its logic within the contract's expected output
        return new PaymentResult(
            isSuccessful: true,
            transactionReference: "COD-" . uniqid(),
            message: "Order queued for collection upon delivery."
        );
    }
}
