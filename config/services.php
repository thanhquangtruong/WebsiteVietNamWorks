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
    'client_id' => '493356964368124',
    'client_secret' => 'c89b09916edb95b5954bf56a77e395f9', // Your GitHub Client Secret
    'redirect' => 'http://localhost:8090/VietNamWorksJob/public/facebook/callback',
    ],
    'google' => [
    'client_id' => '468315942982-m1734sbo8nnq13iv01oj68bf3ts0lm2f.apps.googleusercontent.com',
    'client_secret' => 'JHeE5kPz-NLyQMQoIoDb7_19', // Your GitHub Client Secret
    'redirect' => 'http://localhost:8090/VietNamWorksJob/public/google/callback',
    ],

];
