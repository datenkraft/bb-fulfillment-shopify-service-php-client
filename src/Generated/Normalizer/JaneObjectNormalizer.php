<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer;

use Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\Normalizer\CheckArray;
use Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\Normalizer\ValidatorTrait;
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
    use ValidatorTrait;
    protected $normalizers = [
        
        \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuditLog::class => \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer\AuditLogNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuditLogCollection::class => \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer\AuditLogCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuthPermissionResource::class => \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer\AuthPermissionResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuthPermissionRolePaginatedCollection::class => \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer\AuthPermissionRolePaginatedCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuthPermissionRoleResource::class => \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer\AuthPermissionRoleResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuthRoleCollection::class => \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer\AuthRoleCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuthRoleIdentityPaginatedCollection::class => \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer\AuthRoleIdentityPaginatedCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuthRoleIdentityResource::class => \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer\AuthRoleIdentityResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuthRoleResource::class => \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer\AuthRoleResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\Collection::class => \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer\CollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\CollectionPagination::class => \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer\CollectionPaginationNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\Error::class => \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer\ErrorNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorReferencesItem::class => \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer\ErrorReferencesItemNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse::class => \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer\ErrorResponseNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\GetAuthPermissionCollectionResponse::class => \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer\GetAuthPermissionCollectionResponseNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\Information::class => \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer\InformationNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\InformationResponse::class => \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer\InformationResponseNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\NewAuthRoleResource::class => \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer\NewAuthRoleResourceNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ShopifyInventoryItem::class => \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer\ShopifyInventoryItemNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ShopifyInventoryItemCollection::class => \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer\ShopifyInventoryItemCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ShopifyProductVariant::class => \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer\ShopifyProductVariantNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ShopifyProductVariantCollection::class => \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer\ShopifyProductVariantCollectionNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopClearCachePostBody::class => \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer\ActionShopClearCachePostBodyNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopClearCachePostResponse200::class => \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer\ActionShopClearCachePostResponse200Normalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopCreateTestProductsPostBody::class => \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer\ActionShopCreateTestProductsPostBodyNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopCreateTestProductsPostResponse200::class => \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer\ActionShopCreateTestProductsPostResponse200Normalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopCreateTestProductsCleanupPostBody::class => \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer\ActionShopCreateTestProductsCleanupPostBodyNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopCreateTestProductsCleanupPostResponse200::class => \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer\ActionShopCreateTestProductsCleanupPostResponse200Normalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopCreateTestProductsInitializePostBody::class => \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer\ActionShopCreateTestProductsInitializePostBodyNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopCreateTestProductsInitializePostResponse200::class => \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer\ActionShopCreateTestProductsInitializePostResponse200Normalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopToggleSandboxModePostBody::class => \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer\ActionShopToggleSandboxModePostBodyNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopToggleSandboxModePostResponse200::class => \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer\ActionShopToggleSandboxModePostResponse200Normalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionTestShopRegisterPostBody::class => \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer\ActionTestShopRegisterPostBodyNormalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionTestShopRegisterPostResponse200::class => \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer\ActionTestShopRegisterPostResponse200Normalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionTestShopResetPostResponse200::class => \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer\ActionTestShopResetPostResponse200Normalizer::class,
        
        \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ShopInfoGetResponse200::class => \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer\ShopInfoGetResponse200Normalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\Normalizer\ReferenceNormalizer::class,
    ], $normalizersCache = [];
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[get_class($data)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($data, $format, $context);
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $denormalizerClass = $this->normalizers[$type];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $type, $format, $context);
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
    public function getSupportedTypes(?string $format = null): array
    {
        return [
            
            \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuditLog::class => false,
            \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuditLogCollection::class => false,
            \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuthPermissionResource::class => false,
            \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuthPermissionRolePaginatedCollection::class => false,
            \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuthPermissionRoleResource::class => false,
            \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuthRoleCollection::class => false,
            \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuthRoleIdentityPaginatedCollection::class => false,
            \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuthRoleIdentityResource::class => false,
            \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuthRoleResource::class => false,
            \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\Collection::class => false,
            \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\CollectionPagination::class => false,
            \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\Error::class => false,
            \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorReferencesItem::class => false,
            \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse::class => false,
            \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\GetAuthPermissionCollectionResponse::class => false,
            \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\Information::class => false,
            \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\InformationResponse::class => false,
            \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\NewAuthRoleResource::class => false,
            \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ShopifyInventoryItem::class => false,
            \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ShopifyInventoryItemCollection::class => false,
            \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ShopifyProductVariant::class => false,
            \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ShopifyProductVariantCollection::class => false,
            \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopClearCachePostBody::class => false,
            \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopClearCachePostResponse200::class => false,
            \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopCreateTestProductsPostBody::class => false,
            \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopCreateTestProductsPostResponse200::class => false,
            \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopCreateTestProductsCleanupPostBody::class => false,
            \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopCreateTestProductsCleanupPostResponse200::class => false,
            \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopCreateTestProductsInitializePostBody::class => false,
            \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopCreateTestProductsInitializePostResponse200::class => false,
            \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopToggleSandboxModePostBody::class => false,
            \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopToggleSandboxModePostResponse200::class => false,
            \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionTestShopRegisterPostBody::class => false,
            \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionTestShopRegisterPostResponse200::class => false,
            \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionTestShopResetPostResponse200::class => false,
            \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ShopInfoGetResponse200::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}