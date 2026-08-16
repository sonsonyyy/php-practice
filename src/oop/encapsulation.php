<?php

declare(strict_types=1);

/**
 * Encapsulation wraps the properties and methods together in a single unit and controls access to them.
 * This protects the internal state of an object from unintended external modification.
 *
 * PHP manages this using Access Modifiers:
 * `public`: Access allowed from anywhere.
 * `protected`: Access allowed only within the class itself and its child classes.
 * `private`: Access allowed strictly within the class that defined it.
 */
class BankAccount {
    private int $balance = 0; // Cannot be accessed directly from outside
    protected string $sampleText = "Testing testing...Sample text\n"; // Can be accessed directly by child classes

    public function deposit(int $amount): void { // Controlled entry point
        $this->balance += $amount;
    }

    public function getBalance(): int { // Getter method
        return $this->balance;
    }
}

$account = new BankAccount();
$account->deposit(1000);
$balance = $account->getBalance();
echo "You got $balance in your account.\n";

class ChildAccount extends BankAccount {
    public function getSomething(): string { // Getter method to access the protected property from the parent class to access outside
        return $this->sampleText;
    }
}

$childAccount = new ChildAccount();
echo $childAccount->getSomething();
