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
        dd(call_user_func_array(function($args) { return $args; },$params));
        $api = new GhasedakApi($this->getInformation()['api_key'],$this->getInformation()['api_url']);
        (object) $result = $api->Verify(
            $this->user->mobile,
            1,
            $options['ghasedak_template_name'],
            call_user_func_array(function($args) { foreach ($args as $arg){ return $arg; } },$params)
        );
        dd($result);
        return $result;
    }

    protected function setUser($userId)
    {
        $this->user = $this->getUserModel()->findOrFail($userId);
    }
}
