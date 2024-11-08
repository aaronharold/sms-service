<?php

namespace Aaronharold\SmsService\Models;

/**
 * Class Message
 * 
 * Represents an SMS message to be sent, including the recipient's phone number,
 * the message content, and an optional sender ID.
 */
class Message
{
    /**
     * @var string The recipient's phone number.
     */
    protected string $number;

    /**
     * @var string The content of the SMS message.
     */
    protected string $message;

    /**
     * @var string|null The sender ID (optional).
     * 
     * This could be a short name or phone number that identifies the sender.
     * If not provided, it defaults to null.
     */
    protected ?string $senderId;

    /**
     * Message constructor.
     * 
     * @param string $number The recipient's phone number.
     * @param string $message The message content.
     * @param string|null $senderId The sender ID (optional).
     */
    public function __construct(string $number, string $message, ?string $senderId = null)
    {
        $this->number = $number;
        $this->message = $message;
        $this->senderId = $senderId;
    }

    /**
     * Get the recipient's phone number.
     * 
     * @return string The phone number.
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * Get the message content.
     * 
     * @return string The content of the message.
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * Get the sender ID.
     * 
     * @return string|null The sender ID, or null if not set.
     */
    public function getSenderId(): ?string
    {
        return $this->senderId;
    }

    /**
     * Set the recipient's phone number.
     * 
     * @param string $number The phone number.
     * @return void
     */
    public function setNumber(string $number): void
    {
        $this->number = $number;
    }

    /**
     * Set the message content.
     * 
     * @param string $message The content of the message.
     * @return void
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * Set the sender ID.
     * 
     * @param string|null $senderId The sender ID.
     * @return void
     */
    public function setSenderId(?string $senderId): void
    {
        $this->senderId = $senderId;
    }
}
