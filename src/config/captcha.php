<?php

return [
    'secret' => env('RECAPTCHA_SECRET'),
    'sitekey' => env('MIX_RECAPTCHA_SITE_KEY'),
    'options' => [
        'timeout' => 30,
    ],
];
