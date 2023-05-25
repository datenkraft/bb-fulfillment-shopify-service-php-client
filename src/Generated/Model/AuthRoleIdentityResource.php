<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

class AuthRoleIdentityResource extends \ArrayObject
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
     * Role Code
     *
     * @var string
     */
    protected $roleCode;
    /**
     * Identity ID
     *
     * @var string
     */
    protected $identityId;
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
    /**
     * Identity ID
     *
     * @return string
     */
    public function getIdentityId() : string
    {
        return $this->identityId;
    }
    /**
     * Identity ID
     *
     * @param string $identityId
     *
     * @return self
     */
    public function setIdentityId(string $identityId) : self
    {
        $this->initialized['identityId'] = true;
        $this->identityId = $identityId;
        return $this;
    }
}