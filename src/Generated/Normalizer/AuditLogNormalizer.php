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
class AuditLogNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\AuditLog';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Datenkraft\\Backbone\\Client\\FulfillmentShopifyService\\Generated\\Model\\AuditLog';
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
        $object = new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuditLog();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('endpoint', $data)) {
            $object->setEndpoint($data['endpoint']);
            unset($data['endpoint']);
        }
        if (\array_key_exists('version', $data)) {
            $object->setVersion($data['version']);
            unset($data['version']);
        }
        if (\array_key_exists('identifier', $data)) {
            $object->setIdentifier($data['identifier']);
            unset($data['identifier']);
        }
        if (\array_key_exists('content', $data) && $data['content'] !== null) {
            $object->setContent($data['content']);
            unset($data['content']);
        }
        elseif (\array_key_exists('content', $data) && $data['content'] === null) {
            $object->setContent(null);
        }
        if (\array_key_exists('confidentialContent', $data) && $data['confidentialContent'] !== null) {
            $object->setConfidentialContent($data['confidentialContent']);
            unset($data['confidentialContent']);
        }
        elseif (\array_key_exists('confidentialContent', $data) && $data['confidentialContent'] === null) {
            $object->setConfidentialContent(null);
        }
        if (\array_key_exists('requestId', $data) && $data['requestId'] !== null) {
            $object->setRequestId($data['requestId']);
            unset($data['requestId']);
        }
        elseif (\array_key_exists('requestId', $data) && $data['requestId'] === null) {
            $object->setRequestId(null);
        }
        if (\array_key_exists('oauthClientId', $data)) {
            $object->setOauthClientId($data['oauthClientId']);
            unset($data['oauthClientId']);
        }
        if (\array_key_exists('timestamp', $data)) {
            $object->setTimestamp(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['timestamp']));
            unset($data['timestamp']);
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
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('endpoint') && null !== $object->getEndpoint()) {
            $data['endpoint'] = $object->getEndpoint();
        }
        if ($object->isInitialized('version') && null !== $object->getVersion()) {
            $data['version'] = $object->getVersion();
        }
        if ($object->isInitialized('identifier') && null !== $object->getIdentifier()) {
            $data['identifier'] = $object->getIdentifier();
        }
        if ($object->isInitialized('content') && null !== $object->getContent()) {
            $data['content'] = $object->getContent();
        }
        if ($object->isInitialized('confidentialContent') && null !== $object->getConfidentialContent()) {
            $data['confidentialContent'] = $object->getConfidentialContent();
        }
        if ($object->isInitialized('requestId') && null !== $object->getRequestId()) {
            $data['requestId'] = $object->getRequestId();
        }
        if ($object->isInitialized('oauthClientId') && null !== $object->getOauthClientId()) {
            $data['oauthClientId'] = $object->getOauthClientId();
        }
        if ($object->isInitialized('timestamp') && null !== $object->getTimestamp()) {
            $data['timestamp'] = $object->getTimestamp()->format('Y-m-d\\TH:i:sP');
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}