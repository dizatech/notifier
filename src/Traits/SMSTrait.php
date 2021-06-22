<?php

namespace Dizatech\Notifier\Traits;

use Dizatech\Notifier\Models\NotifierSmsLog;
use Dizatech\Notifier\Models\NotifierSmsTemplate;

trait SMSTrait
{
    protected $userId, $templateId, $params, $options;
    protected $user, $template, $status, $message;

    protected function setVariables($userId,$templateId,$params,$options)
    {
        $this->userId = $userId;
        if (is_null($templateId) || $templateId == 0){
            throw new \ErrorException("templateId can't be 0 or null");
        }
        $this->templateId = $templateId;
        if (is_null($params)){
            throw new \ErrorException("params can't be null");
        }
        if (!is_array($params)){
            throw new \ErrorException("params must be array");
        }
        $this->params = $params;
        if (is_null($options)){
            throw new \ErrorException("options can't be null");
        }
        if (!is_array($options)){
            throw new \ErrorException("options must be array");
        }
        $this->options = $options;
        if (is_null($userId) || $userId == 0){
            if (!array_key_exists('receiver', $this->options)){
                throw new \ErrorException("userId is empty so you must have at least 'receiver' key in your options that contains receiver mobile number");
            }
        }
        if (!array_key_exists('method', $this->options)){
            throw new \ErrorException("you must have 'method' key in your options");
        }
        if (!array_key_exists('param1', $this->params)){
            throw new \ErrorException("you must have at least 'param1' key in your params");
        }
    }

    protected function setUser()
    {
        if (!is_null($this->userId) && $this->userId != 0){
            $this->user = $this->getUserModel()->findOrFail($this->userId);
        }else{
            $this->user->mobile = $this->options['receiver'];
        }
    }

    public function save_sms_log($sms_text,$reciver,$status)
    {
        NotifierSmsLog::query()->create([
            'sms_template_id' => $this->templateId,
            'user_id' => $this->userId,
            'driver' => $this->driver,
            'sms_text' => $sms_text,
            'receiver' => $reciver,
            'status' => $status
        ]);
        return [
            'status' => 200
        ];
    }

    protected function set_sms_template()
    {
        $template = NotifierSmsTemplate::query()->where('id', '=', $this->templateId)->first();
        dd(1);
        return [
            'message' => $this->message,
            'status' => $this->status
        ];
    }
}
