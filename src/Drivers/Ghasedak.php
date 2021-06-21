<?php

namespace Dizatech\Notifier\Drivers;

use Ghasedak\GhasedakApi;
use Dizatech\Notifier\Abstracts\Driver;

class Ghasedak extends Driver
{
    protected $user;

    public function send($userId, $templateId, $params = [],  $options = [])
    {
        $result = null;
        $this->setUser($userId);
        $api = new GhasedakApi($this->getInformation()['api_key'],$this->getInformation()['api_url']);
        (object) $result = $api->Verify(
            $this->user->mobile,
            1,
            "registration",
            'test'
        );
        dd($result);
        return $result;
    }

    protected function setUser($userId)
    {
        $this->user = $this->getUserModel()->findOrFail($userId);
    }
}
