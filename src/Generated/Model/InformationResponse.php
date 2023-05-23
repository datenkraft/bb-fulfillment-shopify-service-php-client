<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

class InformationResponse extends \ArrayObject
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
     * information
     *
     * @var Information[]
     */
    protected $information;
    /**
     * information
     *
     * @return Information[]
     */
    public function getInformation() : array
    {
        return $this->information;
    }
    /**
     * information
     *
     * @param Information[] $information
     *
     * @return self
     */
    public function setInformation(array $information) : self
    {
        $this->initialized['information'] = true;
        $this->information = $information;
        return $this;
    }
}