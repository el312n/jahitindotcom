<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook' => [
        'client_id' => '1163187970470428',
        'client_secret' => '060b02a941b04aedd443a2bda1bc3269',
        'redirect' => 'http://localhost:8000/callbackFB',
    ],
    'google' => [
        'client_id' => '1014988864935-ogjfb5h6u4mugarmpaib3sqiocoicdul.apps.googleusercontent.com',
        'client_secret' => '151ULVLq404eMFtapftvS8GO',
        'redirect' => 'http://localhost:8000/callbackGO',
    ],
];
