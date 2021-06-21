<?php

namespace Dizatech\Transaction\Drivers;

use Ghasedak\GhasedakApi;
use Dizatech\Transaction\Abstracts\Driver;

class Ghasedak extends Driver
{
    public function send($userId, $templateId, $params = [],  $options = [])
    {
        $result = null;

        return $result;
    }
}
