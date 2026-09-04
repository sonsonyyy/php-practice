<?php

declare(strict_types=1);

namespace App\SolidPrinciples\DependencyInversion;

require_once realpath('vendor/autoload.php');

use App\SolidPrinciples\DependencyInversion\OrderProcessor;
use App\SolidPrinciples\DependencyInversion\EmailService;
use App\SolidPrinciples\DependencyInversion\SmsService;

/**
 * DIP Core Definition:
 * - High-level modules should not depend on low-level modules.
 * Both should depend on abstractions.
 * - Abstractions should not depend on details. Details (concrete implementations)
 * should depend on abstractions.
 *
 * What DIP Solves:
 * - High-level Modules: Contain business logic or policy decisions
 * (e.g., processing and order, generating a report).
 * - Low-level Modules: Handle infrastructure or utility details
 * (e.g., sending emails, writing to MySQL, logging to a file).
 *
 * Without DIP, a high-level class creates and manages low-level concrete classes directly.
 * Changing a database driver or notification provider forces modifications inside
 * the core business logic, creating fragile code that is difficult to unit test.
 *
 * DIP `inverts` this dependecy direction. Instead of high-level code calling low-level
 * code directly, both point to a shared interface (abstraction).
 *
 * Key Benefits:
 * - Decoupling: Business logic remains untouched when updating
 * lower-level technical tools.
 * - Testability: You can easily inject mock or fake objects implementing
 * the interface during unit testing.
 * - Extensibility: Adding new implementation (e.g., PushNotificationService)
 * requires creating a new class without modifying existing application logic.
 */
$emailNotifier = new EmailService();
$orderWithEmail = new OrderProcessor($emailNotifier);
$orderWithEmail->processOrder(101);

$smsNotifier = new SmsService();
$orderWithSms = new OrderProcessor($smsNotifier);
$orderWithSms->processOrder(102);
