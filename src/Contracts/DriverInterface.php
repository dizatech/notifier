<?php

namespace Dizatech\Transaction\Contracts;

interface DriverInterface
{
    public function send($userId, $templateId, $params = [],  $options = []);
}
