<?php

return [
    /*
     * Jalur API yang akan didokumentasikan
     */
    'api_path' => 'api',

    'api_domain' => null,

    /*
     * Kredensial untuk HTTP Basic Auth
     */
    'auth' => [
        'username' => env('SWAGGER_USERNAME', 'superadmin'),
        'password' => env('SWAGGER_PASSWORD'),
    ],

    'info' => [
        'version' => env('API_VERSION', '1.0.0'),
        'description' => 'Dokumentasi API Pencatatan Keuangan',
    ],

    /*
     * Middleware yang melindungi akses route /docs/api
     */
    'middleware' => [
        'web',
        \App\Http\Middleware\SwaggerBasicAuth::class,
    ],

    'extensions' => [],
];
