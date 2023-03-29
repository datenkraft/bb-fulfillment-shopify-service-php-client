<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

class NewAuthRoleResource
{
    /**
     * Name
     *
     * @var string
     */
    protected $name;
    /**
     * Name
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
}