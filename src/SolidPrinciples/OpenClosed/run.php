<?php

declare(strict_types=1);

namespace App\SolidPrinciples\OpenClosed;

require_once realpath('vendor/autoload.php');

/**
 * Open/Closed Principle states that Software entities (classes, modules, functions, etc.)
 * should be open for extension, but closed for modification.
 *
 * What Does It Mean?
 * - Open for Extension: You can add new behavior or feature capabilities to a module
 * when requirements change.
 * - Closed for Modification: You do not alter existing, tested, and working core source code
 * when extending functionality.
 *
 * Instead of modifying existing code whenever business requirements shift, OCP uses abstractions
 * (interfaces or abstract classes) and polymorphism to plug in new code without breaking old logic.
 *
 * Why Use It?
 * - Prevents Regression Bugs: Touching existing code risks breaking features that were
 * already working and tested.
 * - Loose Coupling: Code units become independent, modular, and easy to swap.
 * - Scalability: Teams can work on extending features concurrently without editing the same core files,
 * avoiding Git merge conflicts.
 */

/**
 * This design keeps `NotificationService` completely closed for modification, yet open for extension
 * to support as many message channels as needed.
 */
$notifier = new NotificationService();

// Existing channels work smoothly
echo $notifier->notify(new EmailChannel(), "john_doe", "Welcome aboard!");
echo $notifier->notify(new SmsChannel(), "+123456789", "Your OTP is 4321");

// Extended feature works without modifying existing core logic!
echo $notifier->notify(new SlackChannel(), "@john_doe", "Deployment finished successfully.");
