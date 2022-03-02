<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated;

class Client extends \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOpenApi(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Endpoint\GetOpenApi(), $fetch);
    }
    /**
     * Get the openapi documentation in the specified format (yaml or json, fallback is json)
     *
     * @param string $format Openapi file format
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOpenApiInFormat(string $format, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Endpoint\GetOpenApiInFormat($format), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetAuthRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetAuthRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetAuthRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuthRoleResource[]|\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getAuthRoleCollection(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Endpoint\GetAuthRoleCollection(), $fetch);
    }
    /**
     * Delete one or more role to identity assignments in this resource server
     *
     * @param \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuthRoleIdentityResource[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthRoleIdentityCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthRoleIdentityCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthRoleIdentityCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthRoleIdentityCollectionNotFoundException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthRoleIdentityCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthRoleIdentityCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAuthRoleIdentityCollection(array $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Endpoint\DeleteAuthRoleIdentityCollection($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetAuthRoleIdentityCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetAuthRoleIdentityCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetAuthRoleIdentityCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuthRoleIdentityResource[]|\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getAuthRoleIdentityCollection(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Endpoint\GetAuthRoleIdentityCollection(), $fetch);
    }
    /**
     * Create one or more role to identity assignments in this resource server
     *
     * @param \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuthRoleIdentityResource[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostAuthRoleIdentityCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostAuthRoleIdentityCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostAuthRoleIdentityCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostAuthRoleIdentityCollectionNotFoundException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostAuthRoleIdentityCollectionConflictException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostAuthRoleIdentityCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostAuthRoleIdentityCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuthRoleIdentityResource[]|\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postAuthRoleIdentityCollection(array $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Endpoint\PostAuthRoleIdentityCollection($requestBody), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://fulfillment-shopify-service.conqore.niceshops.com/v1');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}