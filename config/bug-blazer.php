<?php

return [
    'enabled' => env('BUG_BLAZER_ENABLED', false),
    'endpoint' => env('BUG_BLAZER_BASE_URL') . '/api/v1',
    'environment' => env('BUG_BLAZER_ENVIRONMENT'),
];
