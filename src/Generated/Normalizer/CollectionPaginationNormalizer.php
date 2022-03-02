<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CollectionPaginationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\CollectionPagination';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\CollectionPagination';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\CollectionPagination();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('page', $data)) {
            $object->setPage($data['page']);
        }
        if (\array_key_exists('pageSize', $data)) {
            $object->setPageSize($data['pageSize']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPage()) {
            $data['page'] = $object->getPage();
        }
        if (null !== $object->getPageSize()) {
            $data['pageSize'] = $object->getPageSize();
        }
        return $data;
    }
}