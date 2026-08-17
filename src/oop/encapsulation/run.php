<?php

declare(strict_types=1);

namespace App\Oop\Encapsulation;

require_once realpath('vendor/autoload.php');

use App\Oop\Encapsulation\BankAccount;

/**
 * Encapsulation wraps the properties and methods together in a single unit and controls access to them.
 * This protects the internal state of an object from unintended external modification.
 *
 * PHP manages this using Access Modifiers:
 * `public`: Access allowed from anywhere.
 * `protected`: Access allowed only within the class itself and its child classes.
 * `private`: Access allowed strictly within the class that defined it.
 */
$bankAccount = new BankAccount();
$bankAccount->deposit(1000);
$balance = $bankAccount->getBalance();
echo "You got $balance in your account.\n";
