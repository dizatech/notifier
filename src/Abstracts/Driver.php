<?php

namespace Dizatech\Notifier\Abstracts;

use Dizatech\Notifier\Contracts\DriverInterface;

abstract class Driver implements DriverInterface
{

    public $driver;

    public function __construct($driver)
    {
        $this->driver = $driver;
    }

    abstract public function send($userId, $templateId, $params = [],  $options = []);

    public function getInformation() {
        return config('dizatech_notifier.information')[$this->driver]['constructor'];
    }

    public function getUserModel()
    {
        return config('dizatech_notifier.user_model');
    }
}
