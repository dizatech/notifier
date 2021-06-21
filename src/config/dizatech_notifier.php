<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default Driver
    |--------------------------------------------------------------------------
    |
    | This value determines which of the following sms service to use.
    | You can switch to a different driver at runtime.
    | Available Drivers : auto (Switch on failure) , ghasedak
    |
    */
    'default' => 'auto',

    /*
    |--------------------------------------------------------------------------
    | Drivers Information
    |--------------------------------------------------------------------------
    |
    | These are the list of drivers information to use in package.
    | You can change the information.
    |
    */
    'information' => [
        'ghasedak' => [
            'constructor' => [
                'api_key' => '',
                'api_url' => '',
                'line_number' => ''
            ],
            'options' => [

            ]
        ],
        'smart_sms' => [
            'constructor' => [
                'line_number' => '',
                'user_id' => '',
                'password'   => '',
                'default_sms_rcpt'   => '',
            ],
            'options' => [

            ]
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | List of Drivers
    |--------------------------------------------------------------------------
    |
    | These are the list of drivers to use for this package.
    | You can change the name.
    |
    */
    'drivers' => [
        'ghasedak' => \Dizatech\Notifier\Drivers\Ghasedak::class
    ]
];
