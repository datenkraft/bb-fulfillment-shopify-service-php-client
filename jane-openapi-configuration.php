<?php

return [
    'openapi-file' => __DIR__ . '/openapi.json',
    'namespace' => 'Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated',
    'directory' => __DIR__ . '/src/Generated',
    'throw-unexpected-status-code' => true,
    // jane 8 defaults GET endpoints to lazy ghost proxies (errors thrown on first property access) -> keep v7 behavior
    'default-fetch-mode' => 'eager',
];
