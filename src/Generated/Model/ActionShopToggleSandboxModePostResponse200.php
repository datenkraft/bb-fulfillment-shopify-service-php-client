<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\AdditionalPropertiesInterface;
class ActionShopToggleSandboxModePostResponse200 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * shopCode
     *
     * @var string
     */
    public string $shopCode;
    public function definedProperties(): array
    {
        return ['shopCode' => 'shopCode'];
    }
}