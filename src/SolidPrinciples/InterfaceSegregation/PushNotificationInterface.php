<?php

declare(strict_types=1);

namespace App\SolidPrinciples\InterfaceSegregation;

// Role-specific interface
interface PushNotificationInterface
{
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
    public function sendPush(string $deviceToken, array $payload): void;
}
