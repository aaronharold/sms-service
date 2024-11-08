<?php

namespace Aaronharold\SmsService\Drivers;

use Aaronharold\SmsService\Models\Message;
use Aaronharold\SmsService\Contracts\MessageInterface;

class M360 implements MessageInterface
{
    protected $config;

    /**
     * M360 constructor.
     *
     * @param array $config The configuration array to initialize the driver.
     */
    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    /**
     * Send a single SMS message.
     *
     * @param Message $message The message object containing the recipient, content, and other details.
     * @return bool True if the message was successfully sent, false otherwise.
     */
    public function sendSms(Message $message): bool
    {
        // Simulating sending the SMS, just return true for now.
        dd('sendsms from m360', $this->config);
        return true;
    }

    /**
     * Send a batch of SMS messages.
     *
     * @param Message[] $messages An array of Message objects to send.
     * @return bool True if all messages were successfully sent, false if any message failed to send.
     */
    public function sendBatchSms(array $messages): bool
    {
        // Simulating sending batch SMS, just return true for now.
        dd('send batch sms from m360', $this->config);
        return true;
    }
}
