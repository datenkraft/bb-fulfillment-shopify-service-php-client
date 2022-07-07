<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

class ActionTestShopRegisterPostBody
{
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
        $this->shopifyShopDomain = $shopifyShopDomain;
        return $this;
    }
}