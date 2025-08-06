<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

class ShopifyProductVariantCollection extends \ArrayObject
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
     * @var list<ShopifyProductVariant>
     */
    protected $data;
    /**
     * 
     *
     * @return list<ShopifyProductVariant>
     */
    public function getData(): array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param list<ShopifyProductVariant> $data
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