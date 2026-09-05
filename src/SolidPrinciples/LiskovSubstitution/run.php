<?php

declare(strict_types=1);

namespace App\SolidPrinciples\LiskovSubstitution;

require_once realpath('vendor/autoload.php');

/**
 * Liskov Substitution states that any child class or interface implementation
 * must be usable anywhere its parent/interface is expected, without breaking
 * the application, throwing unexpected errors, or requiring `if/else` type checks.
 *
 * Core Rules of LSP:
 * - Behavioral Consistency: Subclasses must conform to the implicit assumptions
 * and contracts set by the superclass.
 * - Method Signature Compatibility: Subclasses must match argument and return types
 * (PHP enforces covariance for return types and contravariance for parameters).
 * - Preconditions & Postconditions: Subclasses cannot demand more strict input
 * requirements (preconditions) or deliver less guaranteed output (postconditions)
 * than the parent.
 * - Exception Handling: Subclasses should not throw new, unexpected exceptions that
 * code relying on the parent class doesn't know how to catch.
 */
$stripeGateway = new StripeGateway();
$checkoutProcessor1 = new CheckoutProcessor();
$checkoutProcessor1->processOrder($stripeGateway, 199.99);

$codGateway = new CashOnDeliveryGateway();
$checkoutProcessor2 = new CheckoutProcessor();
$checkoutProcessor2->processOrder($codGateway, 239.99);
