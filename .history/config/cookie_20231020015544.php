return [
    'path' => '/',
    'domain' => env('COOKIE_DOMAIN', null),
    'secure' => false,
    'http_only' => true,
    'same_site' => null,
];
