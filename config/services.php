<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('a21d622b-eebd-484a-a684-90263bac3aa4'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
//608794135153-tuc9tho3dir69273ckams885cd73j3o3.apps.googleusercontent.com
    'google' => [
        'client_id' => '608794135153-tuc9tho3dir69273ckams885cd73j3o3.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://127.0.0.1:8000/auth/callback',
    ],

];
