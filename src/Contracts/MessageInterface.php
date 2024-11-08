<?php

namespace Aaronharold\SmsService\Contracts;

use Aaronharold\SmsService\Models\Message;

/**
 * Interface MessageInterface
 * 
 * This interface defines methods for sending messages via SMS, 
 * including sending a single message and a batch of messages.
 */
interface MessageInterface
{
    /**
     * Send a single SMS message.
     *
     * @param Message $message The message to send.
     * @return bool True on success, false on failure.
     */
    public function sendSms(Message $message): bool;

    /**
     * Send a batch of SMS messages.
     *
     * @param Message[] $messages An array of Message objects to send.
     * @return bool True on success, false on failure.
     */
    public function sendBatchSms(array $messages): bool;
}
