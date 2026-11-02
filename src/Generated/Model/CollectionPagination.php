<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model;

use Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\AdditionalPropertiesInterface;
class CollectionPagination implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The page contained in this collection.
     *
     * @var int
     */
    public int $page;
    /**
     * The page size used for reading the collection.
     *
     * @var int
     */
    public int $pageSize;
    /**
     * The total number of items in the collection.\
     * Note: This can be null depending on the used paginationMode
     *
     * @var int|null
     */
    public ?int $totalCount;
    public function definedProperties(): array
    {
        return ['page' => 'page', 'pageSize' => 'pageSize', 'totalCount' => 'totalCount'];
    }
}