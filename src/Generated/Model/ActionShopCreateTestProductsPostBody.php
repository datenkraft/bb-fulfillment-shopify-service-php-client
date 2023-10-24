<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

class ActionShopCreateTestProductsPostBody extends \ArrayObject
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
     * Domain of the shop the test products should be created for
     *
     * @var string
     */
    protected $shopifyShopDomain;
    /**
     * Domain of the shop the test products should be created for
     *
     * @return string
     */
    public function getShopifyShopDomain() : string
    {
        return $this->shopifyShopDomain;
    }
    /**
     * Domain of the shop the test products should be created for
     *
     * @param string $shopifyShopDomain
     *
     * @return self
     */
    public function setShopifyShopDomain(string $shopifyShopDomain) : self
    {
        $this->initialized['shopifyShopDomain'] = true;
        $this->shopifyShopDomain = $shopifyShopDomain;
        return $this;
    }
}