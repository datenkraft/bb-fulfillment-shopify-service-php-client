<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

class ShopInfoGetResponse200 extends \ArrayObject
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
     * IsCreateTestProductsInitialized
     *
     * @var bool
     */
    protected $isCreateTestProductsInitialized;
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
        $this->initialized['shopCode'] = true;
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
        $this->initialized['externalHmac'] = true;
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
        $this->initialized['isLinkedToStagingTestShop'] = true;
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
        $this->initialized['isShopInSandboxMode'] = true;
        $this->isShopInSandboxMode = $isShopInSandboxMode;
        return $this;
    }
    /**
     * IsCreateTestProductsInitialized
     *
     * @return bool
     */
    public function getIsCreateTestProductsInitialized() : bool
    {
        return $this->isCreateTestProductsInitialized;
    }
    /**
     * IsCreateTestProductsInitialized
     *
     * @param bool $isCreateTestProductsInitialized
     *
     * @return self
     */
    public function setIsCreateTestProductsInitialized(bool $isCreateTestProductsInitialized) : self
    {
        $this->initialized['isCreateTestProductsInitialized'] = true;
        $this->isCreateTestProductsInitialized = $isCreateTestProductsInitialized;
        return $this;
    }
}