<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\AdditionalPropertiesInterface;
class ActionShopToggleSandboxModePostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * shopifyShopDomain
     *
     * @var string
     */
    public string $shopifyShopDomain;
    public function definedProperties(): array
    {
        return ['shopifyShopDomain' => 'shopifyShopDomain'];
    }
}