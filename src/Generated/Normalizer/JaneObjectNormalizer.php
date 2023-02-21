<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer;

use Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    protected $normalizers = array('Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\ErrorResponse' => 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Normalizer\\ErrorResponseNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\InformationResponse' => 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Normalizer\\InformationResponseNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\Information' => 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Normalizer\\InformationNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\Error' => 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Normalizer\\ErrorNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\Collection' => 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Normalizer\\CollectionNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\CollectionPagination' => 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Normalizer\\CollectionPaginationNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\AuthRoleIdentityResource' => 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Normalizer\\AuthRoleIdentityResourceNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\AuthRoleResource' => 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Normalizer\\AuthRoleResourceNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\AuthPermissionResource' => 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Normalizer\\AuthPermissionResourceNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\ShopifyInventoryItemCollection' => 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Normalizer\\ShopifyInventoryItemCollectionNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\ShopifyInventoryItem' => 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Normalizer\\ShopifyInventoryItemNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\ShopifyProductVariant' => 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Normalizer\\ShopifyProductVariantNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\ShopifyProductVariantCollection' => 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Normalizer\\ShopifyProductVariantCollectionNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\ActionTestShopRegisterPostBody' => 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Normalizer\\ActionTestShopRegisterPostBodyNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\ActionTestShopRegisterPostResponse201' => 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Normalizer\\ActionTestShopRegisterPostResponse201Normalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\ActionShopToggleSandboxModePostBody' => 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Normalizer\\ActionShopToggleSandboxModePostBodyNormalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\ActionShopToggleSandboxModePostResponse201' => 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Normalizer\\ActionShopToggleSandboxModePostResponse201Normalizer', 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\ShopInfoGetResponse200' => 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Normalizer\\ShopInfoGetResponse200Normalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $class, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
}