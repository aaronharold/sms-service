<?php

namespace Aaronharold\SmsService;

use Illuminate\Support\Manager;
use Aaronharold\SmsService\Drivers\M360;
use Aaronharold\SmsService\Drivers\Promotexter;
use Aaronharold\SmsService\Contracts\MessageInterface;

class SmsManager extends Manager
{
    /**
     * Get the default driver name.
     *
     * @return string
     */
    public function getDefaultDriver()
    {
        return config('sms-service.default') ?? 'log';
    }

    /**
     * Get an instance of the M360 driver.
     *
     * @return MessageInterface
     */
    public function createM360(): MessageInterface
    {
        return new M360(config('sms-service.drivers.m360'));
    }

    /**
     * Get an instance of the Promotexter driver.
     *
     * @return MessageInterface
     */
    public function createPromotexter(): MessageInterface
    {
        return new Promotexter(config('sms-service.drivers.promotexter'));
    }
}
