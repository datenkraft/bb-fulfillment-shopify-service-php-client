<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Endpoint;

class ShopClearCache extends \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\Client\Endpoint
{
    /**
     * Clear shop cache.
     * @param null|\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopClearCachePostBody $requestBody
     */
    public function __construct(?\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopClearCachePostBody $requestBody = null)
    {
        $this->body = $requestBody;
    }
    use \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/action/shop-clear-cache';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopClearCachePostBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\ShopClearCacheUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\ShopClearCacheForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\ShopClearCacheInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopClearCachePostResponse200|\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopClearCachePostResponse200', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\ShopClearCacheUnauthorizedException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\ShopClearCacheForbiddenException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\ShopClearCacheInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (mb_strpos(strtolower($contentType), 'application/json') !== false) {
            return $serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse', 'json');
        }
        throw new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes(): array
    {
        return ['oAuthAuthorization', 'bearerAuth'];
    }
}