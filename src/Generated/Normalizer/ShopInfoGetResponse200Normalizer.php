<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\Normalizer\CheckArray;
use Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\ShopInfoGetResponse200';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\ShopInfoGetResponse200';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ShopInfoGetResponse200();
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
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('shopCode') && null !== $object->getShopCode()) {
            $data['shopCode'] = $object->getShopCode();
        }
        if ($object->isInitialized('externalHmac') && null !== $object->getExternalHmac()) {
            $data['externalHmac'] = $object->getExternalHmac();
        }
        if ($object->isInitialized('isLinkedToStagingTestShop') && null !== $object->getIsLinkedToStagingTestShop()) {
            $data['isLinkedToStagingTestShop'] = $object->getIsLinkedToStagingTestShop();
        }
        if ($object->isInitialized('isShopInSandboxMode') && null !== $object->getIsShopInSandboxMode()) {
            $data['isShopInSandboxMode'] = $object->getIsShopInSandboxMode();
        }
        if ($object->isInitialized('isCreateTestProductsInitialized') && null !== $object->getIsCreateTestProductsInitialized()) {
            $data['isCreateTestProductsInitialized'] = $object->getIsCreateTestProductsInitialized();
        }
        if ($object->isInitialized('isSessionInvalid') && null !== $object->getIsSessionInvalid()) {
            $data['isSessionInvalid'] = $object->getIsSessionInvalid();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}