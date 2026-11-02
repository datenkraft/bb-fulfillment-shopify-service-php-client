<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\AdditionalPropertiesInterface;
class AuthPermissionRoleResource implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Permission Code
     *
     * @var string
     */
    public string $permissionCode;
    /**
     * Role Code
     *
     * @var string
     */
    public string $roleCode;
    public function definedProperties(): array
    {
        return ['permissionCode' => 'permissionCode', 'roleCode' => 'roleCode'];
    }
}