<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

class Collection
{
    /**
     * Class AbstractPaginatedResourceCollection
     *
     * @var CollectionPagination
     */
    protected $pagination;
    /**
     * 
     *
     * @var mixed
     */
    protected $data;
    /**
     * Class AbstractPaginatedResourceCollection
     *
     * @return CollectionPagination
     */
    public function getPagination() : CollectionPagination
    {
        return $this->pagination;
    }
    /**
     * Class AbstractPaginatedResourceCollection
     *
     * @param CollectionPagination $pagination
     *
     * @return self
     */
    public function setPagination(CollectionPagination $pagination) : self
    {
        $this->pagination = $pagination;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param mixed $data
     *
     * @return self
     */
    public function setData($data) : self
    {
        $this->data = $data;
        return $this;
    }
}