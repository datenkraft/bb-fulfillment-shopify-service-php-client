<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

class InformationResponse
{
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
        $this->information = $information;
        return $this;
    }
}