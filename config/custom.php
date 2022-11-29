<?php

return [
    'sms'   =>  [
        'url'       =>  env('SMS_BASE_URL'),
        'sender'    =>  env('SMS_SENDER'),
        'login'     =>  env('SMS_USER'),
        'password'  =>  env('SMS_PASSWORD'),
        'can_send'  =>  env('SMS_CAN_SEND')
    ],
];
