<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Endpoint;

class GetShopifyProductVariantCollection extends \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\Client\Endpoint
{
    /**
    * Get a list of Product Variants.
    * @param array{
    *    "shopifyShopDomain": string, //shopifyShopDomain
    *    "filter[productNumbers]"?: string, //Filter for productNumber/productNumbers.
    The maximum number of productNumbers allowed is 100.
    The values must be separated by a comma.
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
        return '/shopify/products/variants';
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
        $optionsResolver->setDefined(['shopifyShopDomain', 'filter[productNumbers]']);
        $optionsResolver->setRequired(['shopifyShopDomain']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('shopifyShopDomain', ['string']);
        $optionsResolver->addAllowedTypes('filter[productNumbers]', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetShopifyProductVariantCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetShopifyProductVariantCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetShopifyProductVariantCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetShopifyProductVariantCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ShopifyProductVariantCollection|\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ShopifyProductVariantCollection', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetShopifyProductVariantCollectionBadRequestException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetShopifyProductVariantCollectionUnauthorizedException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetShopifyProductVariantCollectionForbiddenException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetShopifyProductVariantCollectionInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse', 'json'), $response);
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