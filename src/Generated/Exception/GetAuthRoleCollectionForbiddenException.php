<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception;

class GetAuthRoleCollectionForbiddenException extends ForbiddenException
{
    public function __construct(
        /**
         * @var \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse
         */
        private readonly \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse $errorResponse,
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface
         */
        private readonly \Symfony\Contracts\HttpClient\ResponseInterface $response
    )
    {
        parent::__construct('Forbidden

Error codes:
- PERMISSIONS_MISSING: No authorization for the called action was found.');
    }
    public function getErrorResponse(): \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
    public function getResponse(): \Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}