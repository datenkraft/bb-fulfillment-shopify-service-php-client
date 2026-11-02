<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\Normalizer\CheckArray;
use Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ShopifyProductVariantNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ShopifyProductVariant::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ShopifyProductVariant::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ShopifyProductVariant();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('id', $data) && \is_int($data['id'])) {
            $data['id'] = (float) $data['id'];
        }
        if (\array_key_exists('inventoryItemId', $data) && \is_int($data['inventoryItemId'])) {
            $data['inventoryItemId'] = (float) $data['inventoryItemId'];
        }
        if (\array_key_exists('productId', $data) && \is_int($data['productId'])) {
            $data['productId'] = (float) $data['productId'];
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
            unset($data['id']);
        }
        if (\array_key_exists('inventoryItemId', $data)) {
            $object->inventoryItemId = $data['inventoryItemId'];
            unset($data['inventoryItemId']);
        }
        if (\array_key_exists('productId', $data)) {
            $object->productId = $data['productId'];
            unset($data['productId']);
        }
        if (\array_key_exists('title', $data) && $data['title'] !== null) {
            $object->title = $data['title'];
            unset($data['title']);
        }
        elseif (\array_key_exists('title', $data)) {
            $object->title = null;
            unset($data['title']);
        }
        if (\array_key_exists('productNumber', $data) && $data['productNumber'] !== null) {
            $object->productNumber = $data['productNumber'];
            unset($data['productNumber']);
        }
        elseif (\array_key_exists('productNumber', $data)) {
            $object->productNumber = null;
            unset($data['productNumber']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id;
        }
        if (array_key_exists('inventoryItemId', get_object_vars($data)) && null !== ($data->inventoryItemId ?? null)) {
            $dataArray['inventoryItemId'] = $data->inventoryItemId;
        }
        if (array_key_exists('productId', get_object_vars($data)) && null !== ($data->productId ?? null)) {
            $dataArray['productId'] = $data->productId;
        }
        if (array_key_exists('title', get_object_vars($data)) && null !== ($data->title ?? null)) {
            $dataArray['title'] = $data->title;
        }
        if (array_key_exists('productNumber', get_object_vars($data)) && null !== ($data->productNumber ?? null)) {
            $dataArray['productNumber'] = $data->productNumber;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ShopifyProductVariant::class => false];
    }
}