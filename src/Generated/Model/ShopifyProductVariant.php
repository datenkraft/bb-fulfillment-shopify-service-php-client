<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

class ShopifyProductVariant
{
    /**
     * id
     *
     * @var float
     */
    protected $id;
    /**
     * inventoryItemId
     *
     * @var float
     */
    protected $inventoryItemId;
    /**
     * productId
     *
     * @var float
     */
    protected $productId;
    /**
     * title
     *
     * @var string
     */
    protected $title;
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
     * inventoryItemId
     *
     * @return float
     */
    public function getInventoryItemId() : float
    {
        return $this->inventoryItemId;
    }
    /**
     * inventoryItemId
     *
     * @param float $inventoryItemId
     *
     * @return self
     */
    public function setInventoryItemId(float $inventoryItemId) : self
    {
        $this->inventoryItemId = $inventoryItemId;
        return $this;
    }
    /**
     * productId
     *
     * @return float
     */
    public function getProductId() : float
    {
        return $this->productId;
    }
    /**
     * productId
     *
     * @param float $productId
     *
     * @return self
     */
    public function setProductId(float $productId) : self
    {
        $this->productId = $productId;
        return $this;
    }
    /**
     * title
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * title
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->title = $title;
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