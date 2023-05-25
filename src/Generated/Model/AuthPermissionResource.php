<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

class AuthPermissionResource extends \ArrayObject
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
     * Permission Code
     *
     * @var string
     */
    protected $permissionCode;
    /**
     * Name
     *
     * @var string
     */
    protected $name;
    /**
     * Permission Code
     *
     * @return string
     */
    public function getPermissionCode() : string
    {
        return $this->permissionCode;
    }
    /**
     * Permission Code
     *
     * @param string $permissionCode
     *
     * @return self
     */
    public function setPermissionCode(string $permissionCode) : self
    {
        $this->initialized['permissionCode'] = true;
        $this->permissionCode = $permissionCode;
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
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
}