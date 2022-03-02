<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception;

class DeleteAuthRoleIdentityCollectionBadRequestException extends BadRequestException
{
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Bad Request', 400);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}