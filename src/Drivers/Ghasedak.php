<?php

namespace Dizatech\Notifier\Drivers;

use Ghasedak\GhasedakApi;
use Dizatech\Notifier\Abstracts\Driver;

class Ghasedak extends Driver
{
    public function send($userId, $templateId, $params = [],  $options = [])
    {
        $result = null;
        $this->setUser();
        $api = new GhasedakApi($this->getInformation()['api_key'],$this->getInformation()['api_url']);
        (object) $result = $api->Verify(
            $this->user->mobile,
            1,
            "registration",
            $message['password']
        );
        $logText = 'رمزعبور کاربر :' . '****';
        $this->insertLog('sms', $logText, $message_result->result->code);
        return $result;
    }

    protected function setUser()
    {
        dd($this->getUserModel());
    }
}
