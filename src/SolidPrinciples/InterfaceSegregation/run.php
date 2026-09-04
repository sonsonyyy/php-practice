<?php

declare(strict_types=1);

namespace App\SolidPrinciples\InterfaceSegregation;

require_once realpath('vendor/autoload.php');

use App\SolidPrinciples\InterfaceSegregation\MultiChannelNotifier;

/**
 * Interface Segregation states that, Clients should not be forced to depend
 * upon interfaces that they do not use.
 *
 * In plain terms, ISP encourages buidling small, role-specific interfaces
 * instead of large, bloated, "fat" interfaces. When an interface forces an
 * implementing class to provide code for methods it doesn't need, it leads to dummy
 * mehod implementations, thrown `NotImplementedException`s, and unnecessary coupling.
 *
 * Why ISP Matters:
 * - Avoids Dummy Implementations: Classes don't need empty or throw-away methods
 * just to satisfy an interface contract.
 * - Decouples Code: Changes to an unused method signature in a fat interface won't force
 * recompilation or refactoring in unrelated classes.
 * - Improves Maintainability: Smaller interfaces are easier to understand,
 * mock for unit testing, and extend over time.
 */
$notifier = new MultiChannelNotifier();
$notifier->sendEmail("erick@testing.com", "Welcome email!");
$notifier->sendSms("+639458762435", "Hello, welcome from SMS notifier!");
$payload = [
    "message" => [
        "token" => "DEVICE_REGISTRATION_TOKEN_HERE",
        "notification" => [
            "title" => "New Message",
            "body" => "You have a new message from Erick."
        ],
        "data" => [
            "click_action" => "FLUTTER_NOTIFICATION_CLICK",
            "chat_id" => "12345",
            "user_name" => "Erick"
        ]
    ]
];
$notifier->sendPush("740f4707bebcf74f...", $payload);

echo "\n-------------------\n\n";

$smsNotifier = new SmsNotificationSender();
$smsNotifier->sendSms("+639456671928", "Hello from dedicated SMS sender class.");

echo "\n-------------------\n\n";

$userService = new UserRegistrationService($notifier);
$data = ["email" => "erick@testing.com", "password" => "secret"];
$userService->registerUser($data);
