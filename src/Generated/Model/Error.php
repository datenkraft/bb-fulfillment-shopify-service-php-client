<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

class Error extends \ArrayObject
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
     * Code
     *
     * @var string
     */
    protected $code;
    /**
     * Message
     *
     * @var string
     */
    protected $message;
    /**
     * References
     *
     * @var ErrorReferencesItem[]
     */
    protected $references;
    /**
     * Code
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Code
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Message
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * Message
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * References
     *
     * @return ErrorReferencesItem[]
     */
    public function getReferences() : array
    {
        return $this->references;
    }
    /**
     * References
     *
     * @param ErrorReferencesItem[] $references
     *
     * @return self
     */
    public function setReferences(array $references) : self
    {
        $this->initialized['references'] = true;
        $this->references = $references;
        return $this;
    }
}