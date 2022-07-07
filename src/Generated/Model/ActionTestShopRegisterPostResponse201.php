<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

class ActionTestShopRegisterPostResponse201
{
    /**
     * ShopCode
     *
     * @var string
     */
    protected $shopCode;
    /**
     * ShopCode
     *
     * @return string
     */
    public function getShopCode() : string
    {
        return $this->shopCode;
    }
    /**
     * ShopCode
     *
     * @param string $shopCode
     *
     * @return self
     */
    public function setShopCode(string $shopCode) : self
    {
        $this->shopCode = $shopCode;
        return $this;
    }
}