<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

class AuthRoleResource
{
    /**
     * Role Code
     *
     * @var string
     */
    protected $roleCode;
    /**
     * Name
     *
     * @var string
     */
    protected $name;
    /**
     * Role Code
     *
     * @return string
     */
    public function getRoleCode() : string
    {
        return $this->roleCode;
    }
    /**
     * Role Code
     *
     * @param string $roleCode
     *
     * @return self
     */
    public function setRoleCode(string $roleCode) : self
    {
        $this->roleCode = $roleCode;
        return $this;
    }
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