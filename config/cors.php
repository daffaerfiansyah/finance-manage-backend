<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie', 'docs/api*'],
    'allowed_methods' => ['*'],
    'allowed_origins' => [
        'https://*.vercel.app',
        'http://localhost:5173',
        'http://localhost:8000',
        'http://127.0.0.1:8000',
        'http://localhost',
        'http://127.0.0.1',
    ],
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 86400,
    'supports_credentials' => true,
];
