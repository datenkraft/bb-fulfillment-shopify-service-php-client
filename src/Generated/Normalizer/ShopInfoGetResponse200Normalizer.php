<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\Normalizer\CheckArray;
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
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\ShopInfoGetResponse200';
    }
    public function supportsNormalization($data, $format = null) : bool
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
        }
        if (\array_key_exists('externalHmac', $data)) {
            $object->setExternalHmac($data['externalHmac']);
        }
        if (\array_key_exists('isLinkedToStagingTestShop', $data)) {
            $object->setIsLinkedToStagingTestShop($data['isLinkedToStagingTestShop']);
        }
        if (\array_key_exists('isShopInSandboxMode', $data)) {
            $object->setIsShopInSandboxMode($data['isShopInSandboxMode']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getShopCode()) {
            $data['shopCode'] = $object->getShopCode();
        }
        if (null !== $object->getExternalHmac()) {
            $data['externalHmac'] = $object->getExternalHmac();
        }
        if (null !== $object->getIsLinkedToStagingTestShop()) {
            $data['isLinkedToStagingTestShop'] = $object->getIsLinkedToStagingTestShop();
        }
        if (null !== $object->getIsShopInSandboxMode()) {
            $data['isShopInSandboxMode'] = $object->getIsShopInSandboxMode();
        }
        return $data;
    }
}