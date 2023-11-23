<?php

namespace Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated;

class Client extends \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Runtime\Client\Client
{
    /**
     * Create test products for a shop
     *
     * @param \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopCreateTestProductsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostActionShopCreateTestProductsBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostActionShopCreateTestProductsUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostActionShopCreateTestProductsForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostActionShopCreateTestProductsUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostActionShopCreateTestProductsInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopCreateTestProductsPostResponse200|\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postActionShopCreateTestProducts(\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopCreateTestProductsPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Endpoint\PostActionShopCreateTestProducts($requestBody), $fetch);
    }
    /**
     * Execute the cleanup after the creation test products for a shop
     *
     * @param \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopCreateTestProductsCleanupPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostActionShopCreateTestProductsCleanupBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostActionShopCreateTestProductsCleanupUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostActionShopCreateTestProductsCleanupForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostActionShopCreateTestProductsCleanupUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostActionShopCreateTestProductsCleanupInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopCreateTestProductsCleanupPostResponse200|\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postActionShopCreateTestProductsCleanup(\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopCreateTestProductsCleanupPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Endpoint\PostActionShopCreateTestProductsCleanup($requestBody), $fetch);
    }
    /**
     * Execute the initialization before the creation test products for a shop
     *
     * @param \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopCreateTestProductsInitializePostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostActionShopCreateTestProductsInitializeBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostActionShopCreateTestProductsInitializeUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostActionShopCreateTestProductsInitializeForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostActionShopCreateTestProductsInitializeUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostActionShopCreateTestProductsInitializeInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopCreateTestProductsInitializePostResponse200|\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postActionShopCreateTestProductsInitialize(\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopCreateTestProductsInitializePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Endpoint\PostActionShopCreateTestProductsInitialize($requestBody), $fetch);
    }
    /**
     * Toggle sandbox mode for a shop.
     *
     * @param \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopToggleSandboxModePostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\ShopToggleSandboxModeBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\ShopToggleSandboxModeUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\ShopToggleSandboxModeForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\ShopToggleSandboxModeUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\ShopToggleSandboxModeInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopToggleSandboxModePostResponse200|\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function shopToggleSandboxMode(\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionShopToggleSandboxModePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Endpoint\ShopToggleSandboxMode($requestBody), $fetch);
    }
    /**
     * Try to register shopify as a test shop.
     *
     * @param \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionTestShopRegisterPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\TestShopRegisterBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\TestShopRegisterUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\TestShopRegisterForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\TestShopRegisterUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\TestShopRegisterInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionTestShopRegisterPostResponse200|\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function testShopRegister(\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionTestShopRegisterPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Endpoint\TestShopRegister($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\TestShopResetUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\TestShopResetForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\TestShopResetInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ActionTestShopResetPostResponse200|\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function testShopReset(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Endpoint\TestShopReset(), $fetch);
    }
    /**
    * Get the audit log.
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated.
    This can mean loss of performance.
    *     @var string $filter[endpoint] A filter for restricting the audit log to a endpoint.
    *     @var string $filter[version] A filter for restricting the audit log to a endpoint version.
    *     @var mixed $filter[identifier] A filter for querying actions for a identifier.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetAuditLogCollectionBadRequestException
    * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetAuditLogCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetAuditLogCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetAuditLogCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuditLogCollection|\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getAuditLogCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Endpoint\GetAuditLogCollection($queryParameters), $fetch);
    }
    /**
     * Delete one or more role to permission assignments in this resource server
     *
     * @param null|\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuthPermissionRoleResource[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthPermissionRoleCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthPermissionRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthPermissionRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthPermissionRoleCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthPermissionRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAuthPermissionRoleCollection(?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Endpoint\DeleteAuthPermissionRoleCollection($requestBody), $fetch);
    }
    /**
    * Get all role to permission assignments from this resource server
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated.
    This can mean loss of performance.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetAuthPermissionRoleCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetAuthPermissionRoleCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetAuthPermissionRoleCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuthPermissionRolePaginatedCollection|\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getAuthPermissionRoleCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Endpoint\GetAuthPermissionRoleCollection($queryParameters), $fetch);
    }
    /**
     * Create one or more role to permission assignments in this resource server
     *
     * @param \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuthPermissionRoleResource[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostAuthPermissionRoleCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostAuthPermissionRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostAuthPermissionRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostAuthPermissionRoleCollectionConflictException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostAuthPermissionRoleCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostAuthPermissionRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuthPermissionRoleResource[]|\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postAuthPermissionRoleCollection(array $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Endpoint\PostAuthPermissionRoleCollection($requestBody), $fetch);
    }
    /**
    * Get all permissions from this resource server
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated.
    This can mean loss of performance.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetAuthPermissionCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetAuthPermissionCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetAuthPermissionCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\GetAuthPermissionCollectionResponse|\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getAuthPermissionCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Endpoint\GetAuthPermissionCollection($queryParameters), $fetch);
    }
    /**
     * Delete one or more role to identity assignments in this resource server
     *
     * @param null|\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuthRoleIdentityResource[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthRoleIdentityCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthRoleIdentityCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthRoleIdentityCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthRoleIdentityCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthRoleIdentityCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAuthRoleIdentityCollection(?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Endpoint\DeleteAuthRoleIdentityCollection($requestBody), $fetch);
    }
    /**
    * Get all role to identity assignments from this resource server
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated.
    This can mean loss of performance.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetAuthRoleIdentityCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetAuthRoleIdentityCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetAuthRoleIdentityCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuthRoleIdentityPaginatedCollection|\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getAuthRoleIdentityCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Endpoint\GetAuthRoleIdentityCollection($queryParameters), $fetch);
    }
    /**
     * Create one or more role to identity assignments in this resource server
     *
     * @param \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuthRoleIdentityResource[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostAuthRoleIdentityCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostAuthRoleIdentityCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostAuthRoleIdentityCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostAuthRoleIdentityCollectionConflictException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostAuthRoleIdentityCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostAuthRoleIdentityCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuthRoleIdentityResource[]|\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postAuthRoleIdentityCollection(array $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Endpoint\PostAuthRoleIdentityCollection($requestBody), $fetch);
    }
    /**
    * Get all available roles from this resource server
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated.
    This can mean loss of performance.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetAuthRoleCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetAuthRoleCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetAuthRoleCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuthRoleCollection|\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getAuthRoleCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Endpoint\GetAuthRoleCollection($queryParameters), $fetch);
    }
    /**
     * Delete a role for this resource server
     *
     * @param string $roleCode Identifier for the role
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthRoleNotFoundException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\DeleteAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAuthRole(string $roleCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Endpoint\DeleteAuthRole($roleCode), $fetch);
    }
    /**
     * Get a role from this resource server by its roleCode
     *
     * @param string $roleCode Identifier for the role
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetAuthRoleNotFoundException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuthRoleResource|\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getAuthRole(string $roleCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Endpoint\GetAuthRole($roleCode), $fetch);
    }
    /**
     * Patch a role for this resource server
     *
     * @param string $roleCode Identifier for the role
     * @param \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\NewAuthRoleResource $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PatchAuthRoleBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PatchAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PatchAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PatchAuthRoleNotFoundException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PatchAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuthRoleResource|\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function patchAuthRole(string $roleCode, \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\NewAuthRoleResource $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Endpoint\PatchAuthRole($roleCode, $requestBody), $fetch);
    }
    /**
     * Post a role for this resource server
     *
     * @param string $roleCode Identifier for the role
     * @param \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\NewAuthRoleResource $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostAuthRoleBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostAuthRoleConflictException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\PostAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\AuthRoleResource|\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postAuthRole(string $roleCode, \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\NewAuthRoleResource $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Endpoint\PostAuthRole($roleCode, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOpenApi(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Endpoint\GetOpenApi(), $fetch);
    }
    /**
     * Get the changelog in the specified format
     *
     * @param string $format Changelog file format
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetChangelogInFormatNotFoundException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetChangelogInFormatBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getChangelogInFormat(string $format, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Endpoint\GetChangelogInFormat($format), $fetch);
    }
    /**
     * Get the openapi documentation in the specified format
     *
     * @param string $format Openapi file format
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetOpenApiInFormatBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOpenApiInFormat(string $format, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Endpoint\GetOpenApiInFormat($format), $fetch);
    }
    /**
     * Get parameters for the shopify shop frontend (is Sandbox enabled etc.)
     *
     * @param array $queryParameters {
     *     @var string $shopifyShopDomain shopifyShopDomain
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\ShopInfoBadRequestException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\ShopInfoUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\ShopInfoForbiddenException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\ShopInfoInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ShopInfoGetResponse200|\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function shopInfo(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Endpoint\ShopInfo($queryParameters), $fetch);
    }
    /**
    * Get a list of Inventory Items..
    *
    * @param array $queryParameters {
    *     @var string $shopifyShopDomain shopifyShopDomain
    *     @var string $filter[productNumbers] Filter for productNumber/productNumbers.
    The maximum number of productNumbers allowed is 100.
    The values must be separated by a comma.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetShopifyInventoryItemCollectionBadRequestException
    * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetShopifyInventoryItemCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetShopifyInventoryItemCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetShopifyInventoryItemCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ShopifyInventoryItemCollection|\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getShopifyInventoryItemCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Endpoint\GetShopifyInventoryItemCollection($queryParameters), $fetch);
    }
    /**
    * Get a list of Product Variants.
    *
    * @param array $queryParameters {
    *     @var string $shopifyShopDomain shopifyShopDomain
    *     @var string $filter[productNumbers] Filter for productNumber/productNumbers.
       The maximum number of productNumbers allowed is 100.
       The values must be separated by a comma.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetShopifyProductVariantCollectionBadRequestException
    * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetShopifyProductVariantCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetShopifyProductVariantCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\GetShopifyProductVariantCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ShopifyProductVariantCollection|\Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getShopifyProductVariantCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Endpoint\GetShopifyProductVariantCollection($queryParameters), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array(), array $additionalNormalizers = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://fulfillment-service-sy.steve.niceshops.com/v1');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Datenkraft\Backbone\Client\FulfillmentShopifyService\Generated\Normalizer\JaneObjectNormalizer());
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}