<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Endpoint;

class DeleteAuthPermissionRoleCollection extends \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\Client\Endpoint
{
    /**
     * Delete one or more role to permission assignments in this resource server
     *
     * @param null|\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuthPermissionRoleResource[] $requestBody 
     */
    public function __construct(?array $requestBody = null)
    {
        $this->body = $requestBody;
    }
    use \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return '/auth/permission-role';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if (is_array($this->body) and isset($this->body[0]) and $this->body[0] instanceof \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuthPermissionRoleResource) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthPermissionRoleCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthPermissionRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthPermissionRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthPermissionRoleCollectionNotFoundException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthPermissionRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthPermissionRoleCollectionBadRequestException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthPermissionRoleCollectionUnauthorizedException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthPermissionRoleCollectionForbiddenException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthPermissionRoleCollectionNotFoundException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthPermissionRoleCollectionInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\ErrorResponse', 'json'), $response);
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\ErrorResponse', 'json');
        }
        throw new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('oAuthAuthorization', 'bearerAuth');
    }
}