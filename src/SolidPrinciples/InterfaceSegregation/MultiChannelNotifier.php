<?php

declare(strict_types=1);

namespace App\SolidPrinciples\InterfaceSegregation;

use App\SolidPrinciples\InterfaceSegregation\EmailNotificationInterface;
use App\SolidPrinciples\InterfaceSegregation\SmsNotificationInterface;
use App\SolidPrinciples\InterfaceSegregation\PushNotificationInterface;

// An all-in-one provider can implement multiple interfaces if needed
class MultiChannelNotifier implements EmailNotificationInterface, SmsNotificationInterface, PushNotificationInterface
{
    public function sendEmail(string $recipient, string $body): void
    {
        echo "Sending Email to {$recipient}: {$body}" . PHP_EOL;
    }

    public function sendSms(string $phoneNumber, string $text): void
    {
        echo "Sending SMS to {$phoneNumber}: {$text}" . PHP_EOL;
    }

    /**
     * @param string $deviceToken Target FCM registration token
     * @param array{
     *     message: array{
     *         token: string,
     *         notification: array{
     *             title: string,
     *             body: string
     *         },
     *         data: array{
     *             click_action: string,
     *             chat_id: string,
     *             user_name: string
     *         }
     *     }
     * } $payload FCM notification payload structure
     */
    public function sendPush(string $deviceToken, array $payload): void
    {
        $jsonPayload = json_encode($payload);
        echo "Sending Push Notification to {$deviceToken}: {$jsonPayload}" . PHP_EOL;
    }
}
