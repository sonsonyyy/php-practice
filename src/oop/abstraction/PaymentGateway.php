<?php

declare(strict_types=1);

namespace App\Oop\Abstraction;

abstract class PaymentGateway
{
    abstract protected function processPayment(): void;
}
