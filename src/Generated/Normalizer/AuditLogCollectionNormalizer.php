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
class AuditLogCollectionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\AuditLogCollection';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\AuditLogCollection';
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
        $object = new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuditLogCollection();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('pagination', $data)) {
            $object->setPagination($this->denormalizer->denormalize($data['pagination'], 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\CollectionPagination', 'json', $context));
        }
        if (\array_key_exists('data', $data)) {
            $values = array();
            foreach ($data['data'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\AuditLog', 'json', $context);
            }
            $object->setData($values);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPagination()) {
            $data['pagination'] = $this->normalizer->normalize($object->getPagination(), 'json', $context);
        }
        if (null !== $object->getData()) {
            $values = array();
            foreach ($object->getData() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['data'] = $values;
        }
        return $data;
    }
}