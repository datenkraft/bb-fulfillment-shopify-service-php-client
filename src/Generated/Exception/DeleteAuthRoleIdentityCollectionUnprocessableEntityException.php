<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception;

class DeleteAuthRoleIdentityCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse
     */
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Unprocessable Entity');
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse() : \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}