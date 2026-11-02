<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception;

abstract class ForbiddenException extends \RuntimeException implements ClientException, WithResponseInterface
{
    public function __construct(string $message)
    {
        parent::__construct($message, 403);
    }
}