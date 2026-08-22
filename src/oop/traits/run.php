<?php

declare(strict_types=1);

namespace App\Oop\Traits;

require_once realpath('vendor/autoload.php');

/**
 * In PHP, single inheritance means a class can extend only one parent class.
 * A Trait is a mechanism designed to reduce this limitation by enabling code reuse across independent classes.
 *
 * Instead of duplicating code or creating bloated base classes, traits allow you to group reusable methods and include (use) them into any class you want.
 */

// --- Usage ---

$user = new User();
$user->register('maine@example.com');

$order = new Order();
$order->createOrder(1042, 149.99);
