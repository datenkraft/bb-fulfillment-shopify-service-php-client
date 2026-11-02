<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\AdditionalPropertiesInterface;
class AuditLog implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Id
     *
     * @var string
     */
    public string $id;
    /**
     * The name of the audited endpoint.
     *
     * @var string
     */
    public string $endpoint;
    /**
     * The version of the audited endpoint.
     *
     * @var string
     */
    public string $version;
    /**
     * The identifier of the resource.
     *
     * @var string
     */
    public string $identifier;
    /**
     * The content of the resource.
     *
     * @var string|null
     */
    public ?string $content;
    /**
     * The GDPR relevant content of the resource.
     *
     * @var string|null
     */
    public ?string $confidentialContent;
    /**
     * The optional request ID of the endpoint call.
     *
     * @var string|null
     */
    public ?string $requestId;
    /**
     * The OAuth client id which did the change.
     *
     * @var string
     */
    public string $oauthClientId;
    /**
     * The timestamp of the action. Format in ISO 8601.
     *
     * @var \DateTime
     */
    public \DateTime $timestamp;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'endpoint' => 'endpoint', 'version' => 'version', 'identifier' => 'identifier', 'content' => 'content', 'confidentialContent' => 'confidentialContent', 'requestId' => 'requestId', 'oauthClientId' => 'oauthClientId', 'timestamp' => 'timestamp'];
    }
}