<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

class Collection extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var CollectionPagination
     */
    protected $pagination;
    /**
     * 
     *
     * @var array<string, mixed>
     */
    protected $data;
    /**
     * 
     *
     * @return CollectionPagination
     */
    public function getPagination(): CollectionPagination
    {
        return $this->pagination;
    }
    /**
     * 
     *
     * @param CollectionPagination $pagination
     *
     * @return self
     */
    public function setPagination(CollectionPagination $pagination): self
    {
        $this->initialized['pagination'] = true;
        $this->pagination = $pagination;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, mixed>
     */
    public function getData(): iterable
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param array<string, mixed> $data
     *
     * @return self
     */
    public function setData(iterable $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}