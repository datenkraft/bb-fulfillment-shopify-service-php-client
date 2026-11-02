<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\AdditionalPropertiesInterface;
class AuthRoleResource implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Role Code
     *
     * @var string
     */
    public string $roleCode;
    /**
     * Name
     *
     * @var string
     */
    public string $name;
    public function definedProperties(): array
    {
        return ['roleCode' => 'roleCode', 'name' => 'name'];
    }
}