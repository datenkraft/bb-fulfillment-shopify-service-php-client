<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception;

class TestShopRegisterBadRequestException extends BadRequestException
{
    /**
     * @var \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse
     */
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Bad Request');
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse() : \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}