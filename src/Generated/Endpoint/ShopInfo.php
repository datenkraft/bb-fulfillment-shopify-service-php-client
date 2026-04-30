<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Endpoint;

class ShopInfo extends \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\Client\Endpoint
{
    /**
     * Get parameters for the shopify shop frontend (is Sandbox enabled etc.)
     * @param array{
     *    "shopifyShopDomain": string, //shopifyShopDomain
     * } $queryParameters
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/shop-info';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['shopifyShopDomain']);
        $optionsResolver->setRequired(['shopifyShopDomain']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('shopifyShopDomain', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\ShopInfoBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\ShopInfoUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\ShopInfoForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\ShopInfoInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ShopInfoGetResponse200|\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ShopInfoGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\ShopInfoBadRequestException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\ShopInfoUnauthorizedException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\ShopInfoForbiddenException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\ShopInfoInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse', 'json'), $response);
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