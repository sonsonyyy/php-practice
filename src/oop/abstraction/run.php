<?php

declare(strict_types=1);

namespace App\Oop\Abstraction;

require_once realpath('vendor/autoload.php');

use App\Oop\Abstraction\PayPal;

/**
 * Abstraction hides complex background implementation details
 * and reveals only the necessary interface to the user.
 *
 * In PHP, this is built using `Abstract Class`.
 * - Abstract classes cannot be instantiated on their own.
 * - The can contain abstract methods, which declare a template signature but
 * contain no code body. Any child class must provide the actual method implementation.
 */
$paypal = new PayPal();
$paypal->processPayment();
