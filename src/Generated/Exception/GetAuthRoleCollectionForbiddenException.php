<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception;

class GetAuthRoleCollectionForbiddenException extends ForbiddenException
{
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Forbidden', 403);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}