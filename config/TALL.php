<?php

return [
    'name' => env('TALL_APP_NAME', env('APP_NAME')),
    'url' => env('APP_URL', '/'),
    'prefix' => 'tall',
    'middleware' => ['auth'],
];
