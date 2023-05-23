<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

class AuditLog extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Id
     *
     * @var string
     */
    protected $id;
    /**
     * The name of the audited endpoint.
     *
     * @var string
     */
    protected $endpoint;
    /**
     * The version of the audited endpoint.
     *
     * @var string
     */
    protected $version;
    /**
     * The identifier of the resource.
     *
     * @var string
     */
    protected $identifier;
    /**
     * The content of the resource.
     *
     * @var string|null
     */
    protected $content;
    /**
     * The GDPR relevant content of the resource.
     *
     * @var string|null
     */
    protected $confidentialContent;
    /**
     * The optional request ID of the endpoint call.
     *
     * @var string|null
     */
    protected $requestId;
    /**
     * The OAuth client id which did the change.
     *
     * @var string
     */
    protected $oauthClientId;
    /**
     * The timestamp of the action.
     *
     * @var \DateTime
     */
    protected $timestamp;
    /**
     * Id
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Id
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The name of the audited endpoint.
     *
     * @return string
     */
    public function getEndpoint() : string
    {
        return $this->endpoint;
    }
    /**
     * The name of the audited endpoint.
     *
     * @param string $endpoint
     *
     * @return self
     */
    public function setEndpoint(string $endpoint) : self
    {
        $this->initialized['endpoint'] = true;
        $this->endpoint = $endpoint;
        return $this;
    }
    /**
     * The version of the audited endpoint.
     *
     * @return string
     */
    public function getVersion() : string
    {
        return $this->version;
    }
    /**
     * The version of the audited endpoint.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version) : self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * The identifier of the resource.
     *
     * @return string
     */
    public function getIdentifier() : string
    {
        return $this->identifier;
    }
    /**
     * The identifier of the resource.
     *
     * @param string $identifier
     *
     * @return self
     */
    public function setIdentifier(string $identifier) : self
    {
        $this->initialized['identifier'] = true;
        $this->identifier = $identifier;
        return $this;
    }
    /**
     * The content of the resource.
     *
     * @return string|null
     */
    public function getContent() : ?string
    {
        return $this->content;
    }
    /**
     * The content of the resource.
     *
     * @param string|null $content
     *
     * @return self
     */
    public function setContent(?string $content) : self
    {
        $this->initialized['content'] = true;
        $this->content = $content;
        return $this;
    }
    /**
     * The GDPR relevant content of the resource.
     *
     * @return string|null
     */
    public function getConfidentialContent() : ?string
    {
        return $this->confidentialContent;
    }
    /**
     * The GDPR relevant content of the resource.
     *
     * @param string|null $confidentialContent
     *
     * @return self
     */
    public function setConfidentialContent(?string $confidentialContent) : self
    {
        $this->initialized['confidentialContent'] = true;
        $this->confidentialContent = $confidentialContent;
        return $this;
    }
    /**
     * The optional request ID of the endpoint call.
     *
     * @return string|null
     */
    public function getRequestId() : ?string
    {
        return $this->requestId;
    }
    /**
     * The optional request ID of the endpoint call.
     *
     * @param string|null $requestId
     *
     * @return self
     */
    public function setRequestId(?string $requestId) : self
    {
        $this->initialized['requestId'] = true;
        $this->requestId = $requestId;
        return $this;
    }
    /**
     * The OAuth client id which did the change.
     *
     * @return string
     */
    public function getOauthClientId() : string
    {
        return $this->oauthClientId;
    }
    /**
     * The OAuth client id which did the change.
     *
     * @param string $oauthClientId
     *
     * @return self
     */
    public function setOauthClientId(string $oauthClientId) : self
    {
        $this->initialized['oauthClientId'] = true;
        $this->oauthClientId = $oauthClientId;
        return $this;
    }
    /**
     * The timestamp of the action.
     *
     * @return \DateTime
     */
    public function getTimestamp() : \DateTime
    {
        return $this->timestamp;
    }
    /**
     * The timestamp of the action.
     *
     * @param \DateTime $timestamp
     *
     * @return self
     */
    public function setTimestamp(\DateTime $timestamp) : self
    {
        $this->initialized['timestamp'] = true;
        $this->timestamp = $timestamp;
        return $this;
    }
}