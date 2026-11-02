<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Endpoint;

class PostActionShopCreateTestProductsCleanup extends \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\Client\Endpoint
{
    /**
     * Execute the cleanup after the creation test products for a shop
     * @param \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopCreateTestProductsCleanupPostBody $requestBody
     */
    public function __construct(\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopCreateTestProductsCleanupPostBody $requestBody)
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
        return '/action/shop-create-test-products/cleanup';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopCreateTestProductsCleanupPostBody) {
            return [['Content-Type' => ['application/json']], \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
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
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostActionShopCreateTestProductsCleanupBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostActionShopCreateTestProductsCleanupUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostActionShopCreateTestProductsCleanupForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostActionShopCreateTestProductsCleanupUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostActionShopCreateTestProductsCleanupInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopCreateTestProductsCleanupPostResponse200|\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopCreateTestProductsCleanupPostResponse200', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostActionShopCreateTestProductsCleanupBadRequestException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostActionShopCreateTestProductsCleanupUnauthorizedException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (403 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostActionShopCreateTestProductsCleanupForbiddenException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (422 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostActionShopCreateTestProductsCleanupUnprocessableEntityException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostActionShopCreateTestProductsCleanupInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if (stripos(strtolower((string) $contentType), 'application/json') !== false) {
            return $serializer->deserialize($body, 'Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse', 'json');
        }
        throw new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\BadResponseException($status, $body, $response);
    }
    public function getAuthenticationScopes(): array
    {
        return ['oAuthAuthorization', 'bearerAuth'];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Eager->value;
    }
    public function getTargetClass(): ?string
    {
        return null;
    }
}