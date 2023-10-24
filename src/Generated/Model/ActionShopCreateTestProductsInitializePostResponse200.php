<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

class ActionShopCreateTestProductsInitializePostResponse200 extends \ArrayObject
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
     * The OAuth login URL that must be called to complete the initialization
     *
     * @var string|null
     */
    protected $oAuthLoginUrl;
    /**
     * The OAuth login URL that must be called to complete the initialization
     *
     * @return string|null
     */
    public function getOAuthLoginUrl() : ?string
    {
        return $this->oAuthLoginUrl;
    }
    /**
     * The OAuth login URL that must be called to complete the initialization
     *
     * @param string|null $oAuthLoginUrl
     *
     * @return self
     */
    public function setOAuthLoginUrl(?string $oAuthLoginUrl) : self
    {
        $this->initialized['oAuthLoginUrl'] = true;
        $this->oAuthLoginUrl = $oAuthLoginUrl;
        return $this;
    }
}