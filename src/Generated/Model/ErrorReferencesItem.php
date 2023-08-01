<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

class ErrorReferencesItem extends \ArrayObject
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
     * The key of the field causing the error
     *
     * @var string
     */
    protected $key;
    /**
     * The value of the field causing the error
     *
     * @var mixed
     */
    protected $value;
    /**
     * The exact reference to the field causing the error
     *
     * @var string|null
     */
    protected $fieldReference;
    /**
     * The key of the field causing the error
     *
     * @return string
     */
    public function getKey() : string
    {
        return $this->key;
    }
    /**
     * The key of the field causing the error
     *
     * @param string $key
     *
     * @return self
     */
    public function setKey(string $key) : self
    {
        $this->initialized['key'] = true;
        $this->key = $key;
        return $this;
    }
    /**
     * The value of the field causing the error
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * The value of the field causing the error
     *
     * @param mixed $value
     *
     * @return self
     */
    public function setValue($value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * The exact reference to the field causing the error
     *
     * @return string|null
     */
    public function getFieldReference() : ?string
    {
        return $this->fieldReference;
    }
    /**
     * The exact reference to the field causing the error
     *
     * @param string|null $fieldReference
     *
     * @return self
     */
    public function setFieldReference(?string $fieldReference) : self
    {
        $this->initialized['fieldReference'] = true;
        $this->fieldReference = $fieldReference;
        return $this;
    }
}