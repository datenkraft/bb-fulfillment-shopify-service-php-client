<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

class AuthPermissionRoleResource extends \ArrayObject
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
     * Role Code
     *
     * @var string
     */
    protected $roleCode;
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
        $this->initialized['roleCode'] = true;
        $this->roleCode = $roleCode;
        return $this;
    }
}