<?php

namespace Dizatech\Notifier\Drivers;

use Ghasedak\GhasedakApi;
use Dizatech\Notifier\Abstracts\Driver;

class Ghasedak extends Driver
{
    public function send($userId, $templateId, $params = [],  $options = [])
    {
        $result = null;
        dd($this->getInformation());
        $api = new GhasedakApi();
        (object) $message_result = $api->Verify(
            $this->user->mobile,
            1,
            "registration",
            $message['password']
        );
        $logText = 'رمزعبور کاربر :' . '****';
        $this->insertLog('sms', $logText, $message_result->result->code);
        return $result;
    }
}
