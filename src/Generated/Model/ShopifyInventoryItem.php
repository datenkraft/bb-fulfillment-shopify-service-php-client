<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

class ShopifyInventoryItem extends \ArrayObject
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
     * id
     *
     * @var float
     */
    protected $id;
    /**
     * product number
     *
     * @var string
     */
    protected $productNumber;
    /**
     * id
     *
     * @return float
     */
    public function getId() : float
    {
        return $this->id;
    }
    /**
     * id
     *
     * @param float $id
     *
     * @return self
     */
    public function setId(float $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * product number
     *
     * @return string
     */
    public function getProductNumber() : string
    {
        return $this->productNumber;
    }
    /**
     * product number
     *
     * @param string $productNumber
     *
     * @return self
     */
    public function setProductNumber(string $productNumber) : self
    {
        $this->initialized['productNumber'] = true;
        $this->productNumber = $productNumber;
        return $this;
    }
}