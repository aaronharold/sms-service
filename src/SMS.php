<?php

namespace Aaronharold\SmsService;

use Illuminate\Support\Facades\Facade;

/**
 * Class SMS
 *
 * This is a Laravel facade for interacting with the underlying SMS service.
 * It provides a static interface to send SMS messages and access other
 * SMS-related functionality without directly referencing the service class.
 *
 * The facade utilizes Laravel's service container and allows developers
 * to use the 'sms' service easily throughout their application.
 *
 * Example Usage:
 * 
 * // Send a single SMS
 * SMS::sendSms($message);
 *
 * // Send a batch of SMS messages
 * SMS::sendBatchSms($messages);
 *
 * @method static bool sendSms(\Aaronharold\SmsService\Models\Message $message) Sends a single SMS message.
 * @method static bool sendBatchSms(array $messages) Sends a batch of SMS messages.
 * 
 * @package Aaronharold\SmsService
 */
class SMS extends Facade
{
    /**
     * Get the name of the binding in the service container.
     *
     * This method tells the Laravel service container which service to resolve
     * when using the SMS facade. The 'sms' key corresponds to the SMS service
     * that handles the actual sending and management of SMS messages.
     *
     * @return string The binding name for the SMS service.
     */
    protected static function getFacadeAccessor()
    {
        return 'sms';
    }
}
