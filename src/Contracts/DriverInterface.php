<?php

namespace Dizatech\Notifier\Contracts;

interface DriverInterface
{
    public function send($userId, $templateId, $params = [],  $options = []);
}
