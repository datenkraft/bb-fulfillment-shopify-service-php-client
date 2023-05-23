<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

class ShopifyProductVariantCollection extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}