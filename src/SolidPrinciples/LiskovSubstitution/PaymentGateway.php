<?php

declare(strict_types=1);

namespace App\SolidPrinciples\LiskovSubstitution;

use App\SolidPrinciples\LiskovSubstitution\PaymentResult;

interface PaymentGateway
{
    public function processPaymet(float $amount): PaymentResult;
}
