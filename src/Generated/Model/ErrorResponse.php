<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

class ErrorResponse extends \ArrayObject
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
     * errors
     *
     * @var Error[]
     */
    protected $errors;
    /**
     * errors
     *
     * @return Error[]
     */
    public function getErrors() : array
    {
        return $this->errors;
    }
    /**
     * errors
     *
     * @param Error[] $errors
     *
     * @return self
     */
    public function setErrors(array $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}