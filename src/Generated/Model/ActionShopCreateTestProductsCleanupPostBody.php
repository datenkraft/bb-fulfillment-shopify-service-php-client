<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\AdditionalPropertiesInterface;
class ActionShopCreateTestProductsCleanupPostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Domain of the shop the test products should be created for
     *
     * @var string
     */
    public string $shopifyShopDomain;
    public function definedProperties(): array
    {
        return ['shopifyShopDomain' => 'shopifyShopDomain'];
    }
}