<?php

declare(strict_types=1);

namespace App\Oop\Encapsulation;

class BankAccount
{
    private int $balance = 0;

    public function deposit(int $amount): void
    {
        $this->balance += $amount;
    }

    public function getBalance(): int
    {
        return $this->balance;
    }
}
