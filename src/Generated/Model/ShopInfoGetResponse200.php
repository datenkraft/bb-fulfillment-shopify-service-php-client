<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\AdditionalPropertiesInterface;
class ShopInfoGetResponse200 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * ShopCode
     *
     * @var string
     */
    public string $shopCode;
    /**
     * ExternalHmac
     *
     * @var string
     */
    public string $externalHmac;
    /**
     * IsLinkedToStagingTestShop
     *
     * @var bool
     */
    public bool $isLinkedToStagingTestShop;
    /**
     * IsShopInSandboxMode
     *
     * @var bool
     */
    public bool $isShopInSandboxMode;
    /**
     * IsCreateTestProductsInitialized
     *
     * @var bool
     */
    public bool $isCreateTestProductsInitialized;
    /**
     * IsSessionInvalid
     *
     * @var bool
     */
    public bool $isSessionInvalid;
    public function definedProperties(): array
    {
        return ['shopCode' => 'shopCode', 'externalHmac' => 'externalHmac', 'isLinkedToStagingTestShop' => 'isLinkedToStagingTestShop', 'isShopInSandboxMode' => 'isShopInSandboxMode', 'isCreateTestProductsInitialized' => 'isCreateTestProductsInitialized', 'isSessionInvalid' => 'isSessionInvalid'];
    }
}