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
class AuditLogNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuditLog::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuditLog::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuditLog();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
            unset($data['id']);
        }
        if (\array_key_exists('endpoint', $data)) {
            $object->endpoint = $data['endpoint'];
            unset($data['endpoint']);
        }
        if (\array_key_exists('version', $data)) {
            $object->version = $data['version'];
            unset($data['version']);
        }
        if (\array_key_exists('identifier', $data)) {
            $object->identifier = $data['identifier'];
            unset($data['identifier']);
        }
        if (\array_key_exists('content', $data) && $data['content'] !== null) {
            $object->content = $data['content'];
            unset($data['content']);
        }
        elseif (\array_key_exists('content', $data)) {
            $object->content = null;
            unset($data['content']);
        }
        if (\array_key_exists('confidentialContent', $data) && $data['confidentialContent'] !== null) {
            $object->confidentialContent = $data['confidentialContent'];
            unset($data['confidentialContent']);
        }
        elseif (\array_key_exists('confidentialContent', $data)) {
            $object->confidentialContent = null;
            unset($data['confidentialContent']);
        }
        if (\array_key_exists('requestId', $data) && $data['requestId'] !== null) {
            $object->requestId = $data['requestId'];
            unset($data['requestId']);
        }
        elseif (\array_key_exists('requestId', $data)) {
            $object->requestId = null;
            unset($data['requestId']);
        }
        if (\array_key_exists('oauthClientId', $data)) {
            $object->oauthClientId = $data['oauthClientId'];
            unset($data['oauthClientId']);
        }
        if (\array_key_exists('timestamp', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['timestamp']);
            if (false === $date) {
                if (is_string($data['timestamp']) and 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['timestamp'])) {
                    try {
                        $date = new \DateTime($data['timestamp']);
                    } catch (\Exception) {
                        throw new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\Normalizer\InvalidDateException($data['timestamp'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\Normalizer\InvalidDateException($data['timestamp'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->timestamp = $date;
            unset($data['timestamp']);
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
        if (array_key_exists('endpoint', get_object_vars($data)) && null !== ($data->endpoint ?? null)) {
            $dataArray['endpoint'] = $data->endpoint;
        }
        if (array_key_exists('version', get_object_vars($data)) && null !== ($data->version ?? null)) {
            $dataArray['version'] = $data->version;
        }
        if (array_key_exists('identifier', get_object_vars($data)) && null !== ($data->identifier ?? null)) {
            $dataArray['identifier'] = $data->identifier;
        }
        if (array_key_exists('content', get_object_vars($data)) && null !== ($data->content ?? null)) {
            $dataArray['content'] = $data->content;
        }
        if (array_key_exists('confidentialContent', get_object_vars($data)) && null !== ($data->confidentialContent ?? null)) {
            $dataArray['confidentialContent'] = $data->confidentialContent;
        }
        if (array_key_exists('requestId', get_object_vars($data)) && null !== ($data->requestId ?? null)) {
            $dataArray['requestId'] = $data->requestId;
        }
        if (array_key_exists('oauthClientId', get_object_vars($data)) && null !== ($data->oauthClientId ?? null)) {
            $dataArray['oauthClientId'] = $data->oauthClientId;
        }
        if (array_key_exists('timestamp', get_object_vars($data)) && null !== ($data->timestamp ?? null)) {
            $dataArray['timestamp'] = $data->timestamp->format('Y-m-d\TH:i:sP');
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
        return [\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuditLog::class => false];
    }
}