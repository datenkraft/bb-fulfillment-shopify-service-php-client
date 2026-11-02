<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\AdditionalPropertiesInterface;
class ShopifyInventoryItemCollection implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<ShopifyInventoryItem>
     */
    public array $data;
    public function definedProperties(): array
    {
        return ['data' => 'data'];
    }
}