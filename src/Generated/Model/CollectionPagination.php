<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

class CollectionPagination extends \ArrayObject
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
    * The total number of items in the collection.\
    Note: This can be null depending on the used paginationMode
    *
    * @var int|null
    */
    protected $totalCount;
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
        $this->initialized['page'] = true;
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
        $this->initialized['pageSize'] = true;
        $this->pageSize = $pageSize;
        return $this;
    }
    /**
    * The total number of items in the collection.\
    Note: This can be null depending on the used paginationMode
    *
    * @return int|null
    */
    public function getTotalCount() : ?int
    {
        return $this->totalCount;
    }
    /**
    * The total number of items in the collection.\
    Note: This can be null depending on the used paginationMode
    *
    * @param int|null $totalCount
    *
    * @return self
    */
    public function setTotalCount(?int $totalCount) : self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;
        return $this;
    }
}