<?php

declare(strict_types=1);

namespace App\SolidPrinciples\SingleResponsibility;

require_once realpath('vendor/autoload.php');

use App\SolidPrinciples\SingleResponsibility\UserRepository;
use App\SolidPrinciples\SingleResponsibility\MailerService;
use App\SolidPrinciples\SingleResponsibility\UserRegistrationService;

/**
 * Single Responsibility principle states that a class should have one, and only one, reason to change.
 *
 * This means a class should only have a single job, focus, or business responsibility.
 * A "reason to change" corresponds to a specific actor or stakeholder who cares about that functionality.
 * If a changein business logic, database schema, and presentation formatting all require modifying
 * the same file, that class has too many responsibilities.
 *
 * Why SRP Matters:
 * - High Cohesion, Low Coupling: Code stays organized; related functions live together, and
 * dependencies are isolated.
 * - Easier Testing: Smaller, focused classes require simple unit tests without excessive setup.
 * - Safer Refactoring: Updating one piece of logic (e.g., changing an email service) won't
 * accidentally break another (e.g., order processing).
 */
$user = [
    "email" => "john_doe@email.com",
    "password" => "secret"
];

$repository = new UserRepository();
$mailer = new  MailerService();
$registrationService = new UserRegistrationService($repository, $mailer);

$registered = $registrationService->register($user);
if ($registered) {
    echo "User with email " . $user['email'] . " successfully registered!" . PHP_EOL;
}
