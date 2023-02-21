<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

class ShopifyInventoryItemCollection
{
    /**
     * 
     *
     * @var ShopifyInventoryItem[]
     */
    protected $data;
    /**
     * 
     *
     * @return ShopifyInventoryItem[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ShopifyInventoryItem[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}