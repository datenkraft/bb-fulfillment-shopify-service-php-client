<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

class ShopifyProductVariantCollection
{
    /**
     * 
     *
     * @var ShopifyProductVariant[]
     */
    protected $data;
    /**
     * 
     *
     * @return ShopifyProductVariant[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ShopifyProductVariant[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}