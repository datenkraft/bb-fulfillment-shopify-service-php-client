<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

class ActionShopCreateTestProductsPostResponse200 extends \ArrayObject
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
     * The productNumbers of the created products
     *
     * @var string[]
     */
    protected $productNumbers;
    /**
     * The productNumbers of the created products
     *
     * @return string[]
     */
    public function getProductNumbers() : array
    {
        return $this->productNumbers;
    }
    /**
     * The productNumbers of the created products
     *
     * @param string[] $productNumbers
     *
     * @return self
     */
    public function setProductNumbers(array $productNumbers) : self
    {
        $this->initialized['productNumbers'] = true;
        $this->productNumbers = $productNumbers;
        return $this;
    }
}