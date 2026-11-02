<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\AdditionalPropertiesInterface;
class ShopifyProductVariant implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * id
     *
     * @var float
     */
    public float $id;
    /**
     * inventoryItemId
     *
     * @var float
     */
    public float $inventoryItemId;
    /**
     * productId
     *
     * @var float
     */
    public float $productId;
    /**
     * title
     *
     * @var string|null
     */
    public ?string $title;
    /**
     * product number
     *
     * @var string|null
     */
    public ?string $productNumber;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'inventoryItemId' => 'inventoryItemId', 'productId' => 'productId', 'title' => 'title', 'productNumber' => 'productNumber'];
    }
}