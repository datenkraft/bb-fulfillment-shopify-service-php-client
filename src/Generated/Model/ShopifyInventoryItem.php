<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\AdditionalPropertiesInterface;
class ShopifyInventoryItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * id
     *
     * @var float
     */
    public float $id;
    /**
     * product number
     *
     * @var string
     */
    public string $productNumber;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'productNumber' => 'productNumber'];
    }
}