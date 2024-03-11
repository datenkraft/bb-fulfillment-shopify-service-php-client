<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

class ShopifyProductVariant extends \ArrayObject
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
     * @var string|null
     */
    protected $title;
    /**
     * product number
     *
     * @var string|null
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
        $this->initialized['inventoryItemId'] = true;
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
        $this->initialized['productId'] = true;
        $this->productId = $productId;
        return $this;
    }
    /**
     * title
     *
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * title
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title) : self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * product number
     *
     * @return string|null
     */
    public function getProductNumber() : ?string
    {
        return $this->productNumber;
    }
    /**
     * product number
     *
     * @param string|null $productNumber
     *
     * @return self
     */
    public function setProductNumber(?string $productNumber) : self
    {
        $this->initialized['productNumber'] = true;
        $this->productNumber = $productNumber;
        return $this;
    }
}