<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

class ShopifyInventoryItemCollection extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var list<ShopifyInventoryItem>
     */
    protected $data;
    /**
     * 
     *
     * @return list<ShopifyInventoryItem>
     */
    public function getData(): array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param list<ShopifyInventoryItem> $data
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}