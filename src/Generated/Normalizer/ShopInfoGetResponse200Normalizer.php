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
class ShopInfoGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ShopInfoGetResponse200::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ShopInfoGetResponse200::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ShopInfoGetResponse200();
        if (\array_key_exists('isLinkedToStagingTestShop', $data) && \is_int($data['isLinkedToStagingTestShop'])) {
            $data['isLinkedToStagingTestShop'] = (bool) $data['isLinkedToStagingTestShop'];
        }
        if (\array_key_exists('isShopInSandboxMode', $data) && \is_int($data['isShopInSandboxMode'])) {
            $data['isShopInSandboxMode'] = (bool) $data['isShopInSandboxMode'];
        }
        if (\array_key_exists('isCreateTestProductsInitialized', $data) && \is_int($data['isCreateTestProductsInitialized'])) {
            $data['isCreateTestProductsInitialized'] = (bool) $data['isCreateTestProductsInitialized'];
        }
        if (\array_key_exists('isSessionInvalid', $data) && \is_int($data['isSessionInvalid'])) {
            $data['isSessionInvalid'] = (bool) $data['isSessionInvalid'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('shopCode', $data)) {
            $object->setShopCode($data['shopCode']);
            unset($data['shopCode']);
        }
        if (\array_key_exists('externalHmac', $data)) {
            $object->setExternalHmac($data['externalHmac']);
            unset($data['externalHmac']);
        }
        if (\array_key_exists('isLinkedToStagingTestShop', $data)) {
            $object->setIsLinkedToStagingTestShop($data['isLinkedToStagingTestShop']);
            unset($data['isLinkedToStagingTestShop']);
        }
        if (\array_key_exists('isShopInSandboxMode', $data)) {
            $object->setIsShopInSandboxMode($data['isShopInSandboxMode']);
            unset($data['isShopInSandboxMode']);
        }
        if (\array_key_exists('isCreateTestProductsInitialized', $data)) {
            $object->setIsCreateTestProductsInitialized($data['isCreateTestProductsInitialized']);
            unset($data['isCreateTestProductsInitialized']);
        }
        if (\array_key_exists('isSessionInvalid', $data)) {
            $object->setIsSessionInvalid($data['isSessionInvalid']);
            unset($data['isSessionInvalid']);
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
        if ($data->isInitialized('shopCode') && null !== $data->getShopCode()) {
            $dataArray['shopCode'] = $data->getShopCode();
        }
        if ($data->isInitialized('externalHmac') && null !== $data->getExternalHmac()) {
            $dataArray['externalHmac'] = $data->getExternalHmac();
        }
        if ($data->isInitialized('isLinkedToStagingTestShop') && null !== $data->getIsLinkedToStagingTestShop()) {
            $dataArray['isLinkedToStagingTestShop'] = $data->getIsLinkedToStagingTestShop();
        }
        if ($data->isInitialized('isShopInSandboxMode') && null !== $data->getIsShopInSandboxMode()) {
            $dataArray['isShopInSandboxMode'] = $data->getIsShopInSandboxMode();
        }
        if ($data->isInitialized('isCreateTestProductsInitialized') && null !== $data->getIsCreateTestProductsInitialized()) {
            $dataArray['isCreateTestProductsInitialized'] = $data->getIsCreateTestProductsInitialized();
        }
        if ($data->isInitialized('isSessionInvalid') && null !== $data->getIsSessionInvalid()) {
            $dataArray['isSessionInvalid'] = $data->getIsSessionInvalid();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ShopInfoGetResponse200::class => false];
    }
}