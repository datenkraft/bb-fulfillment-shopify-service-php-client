<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

class ShopInfoGetResponse200
{
    /**
     * ShopCode
     *
     * @var string
     */
    protected $shopCode;
    /**
     * ExternalHmac
     *
     * @var string
     */
    protected $externalHmac;
    /**
     * IsLinkedToStagingTestShop
     *
     * @var bool
     */
    protected $isLinkedToStagingTestShop;
    /**
     * IsShopInSandboxMode
     *
     * @var bool
     */
    protected $isShopInSandboxMode;
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
    /**
     * ExternalHmac
     *
     * @return string
     */
    public function getExternalHmac() : string
    {
        return $this->externalHmac;
    }
    /**
     * ExternalHmac
     *
     * @param string $externalHmac
     *
     * @return self
     */
    public function setExternalHmac(string $externalHmac) : self
    {
        $this->externalHmac = $externalHmac;
        return $this;
    }
    /**
     * IsLinkedToStagingTestShop
     *
     * @return bool
     */
    public function getIsLinkedToStagingTestShop() : bool
    {
        return $this->isLinkedToStagingTestShop;
    }
    /**
     * IsLinkedToStagingTestShop
     *
     * @param bool $isLinkedToStagingTestShop
     *
     * @return self
     */
    public function setIsLinkedToStagingTestShop(bool $isLinkedToStagingTestShop) : self
    {
        $this->isLinkedToStagingTestShop = $isLinkedToStagingTestShop;
        return $this;
    }
    /**
     * IsShopInSandboxMode
     *
     * @return bool
     */
    public function getIsShopInSandboxMode() : bool
    {
        return $this->isShopInSandboxMode;
    }
    /**
     * IsShopInSandboxMode
     *
     * @param bool $isShopInSandboxMode
     *
     * @return self
     */
    public function setIsShopInSandboxMode(bool $isShopInSandboxMode) : self
    {
        $this->isShopInSandboxMode = $isShopInSandboxMode;
        return $this;
    }
}