<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Endpoint;

class DeleteAuthRole extends \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\Client\Endpoint
{
    protected $roleCode;
    /**
     * Delete a role for this resource server
     *
     * @param string $roleCode Identifier for the role
     */
    public function __construct(string $roleCode)
    {
        $this->roleCode = $roleCode;
    }
    use \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{roleCode}'), array($this->roleCode), '/auth/role/{roleCode}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthRoleBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthRoleNotFoundException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthRoleBadRequestException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthRoleUnauthorizedException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthRoleForbiddenException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthRoleNotFoundException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthRoleInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\ErrorResponse', 'json'));
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