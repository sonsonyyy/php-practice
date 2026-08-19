<?php

declare(strict_types=1);

namespace App\Oop\Interface;

require_once realpath('vendor/autoload.php');
include_once __DIR__ . '/checkout.php';

use App\Oop\Interface\StripeGateway;
use App\Oop\Interface\PayPalGateway;

/**
 * Interface or Object interface specifies which properties and methods a class must implement,
 * without having to define the concrete implementation of methods and properties.
 *
 * The best way to explain an interface is as a `contract`. It tells a class what it must do.
 *
 * All methods, properties, and constants (const/define()) declared in an interface must be public.
 * This is the nature of interface.
 *
 * Here's a caveat: PHP 8.3 and below does not support `properties` inside Interface. It could only
 * contain methods and constants. If you tried to add a property, PHP would throw a fatal error.
 */

// Execution
$stripe = new StripeGateway();
checkoutProcessor($stripe, 49.99);

echo "\n-------------------\n\n";

$paypal = new PayPalGateway();
checkoutProcessor($paypal, 120.00);
