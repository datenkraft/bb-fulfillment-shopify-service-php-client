<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\AdditionalPropertiesInterface;
class ActionShopCreateTestProductsInitializePostResponse200 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The OAuth login URL that must be called to complete the initialization
     *
     * @var string|null
     */
    public ?string $oAuthLoginUrl;
    public function definedProperties(): array
    {
        return ['oAuthLoginUrl' => 'oAuthLoginUrl'];
    }
}