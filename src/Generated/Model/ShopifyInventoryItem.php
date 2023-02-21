<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

class ShopifyInventoryItem
{
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
        $this->productNumber = $productNumber;
        return $this;
    }
}