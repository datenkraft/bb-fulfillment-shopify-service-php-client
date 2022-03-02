<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

class CollectionPagination
{
    /**
     * The page contained in this collection.
     *
     * @var int
     */
    protected $page;
    /**
     * The page size used for reading the collection.
     *
     * @var int
     */
    protected $pageSize;
    /**
     * The page contained in this collection.
     *
     * @return int
     */
    public function getPage() : int
    {
        return $this->page;
    }
    /**
     * The page contained in this collection.
     *
     * @param int $page
     *
     * @return self
     */
    public function setPage(int $page) : self
    {
        $this->page = $page;
        return $this;
    }
    /**
     * The page size used for reading the collection.
     *
     * @return int
     */
    public function getPageSize() : int
    {
        return $this->pageSize;
    }
    /**
     * The page size used for reading the collection.
     *
     * @param int $pageSize
     *
     * @return self
     */
    public function setPageSize(int $pageSize) : self
    {
        $this->pageSize = $pageSize;
        return $this;
    }
}