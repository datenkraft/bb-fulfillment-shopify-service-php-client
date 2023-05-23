<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

class ActionShopToggleSandboxModePostBody extends \ArrayObject
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
     * shopifyShopDomain
     *
     * @var string
     */
    protected $shopifyShopDomain;
    /**
     * shopifyShopDomain
     *
     * @return string
     */
    public function getShopifyShopDomain() : string
    {
        return $this->shopifyShopDomain;
    }
    /**
     * shopifyShopDomain
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