<?php
/**
 * UserfieldApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * UserfieldApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserfieldApi
{
    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return UserfieldApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation userfieldManagev1userFields
     *
     * Retrieves the list of user additional fields, filtered on input parameters
     *
     * @param string[] $branch_ids Filter user additional fields by branch - it applies field visibility by branch. Will be merged with the &amp;quot;branch_codes&amp;quot; parameter (optional)
     * @param string[] $branch_codes Filter user additional fields by branch - it applies field visibility by branch. Will be merged with the &amp;quot;branch_ids&amp;quot; parameter (optional)
     * @param int $user_id Filter user additional fields by user ID. If  it is passed and branch_ids is not not passed, the branches of requested user will be taken. (optional)
     * @param int $as_array If it is not passed the responce will be simplified paginated list. If it is passed the responce will contains fully filled list (drop down with options, filled countries, etc.) (optional)
     * @param int $skip_all Set this parameter to 1 in cases when the condition is to return empty array if the requested branch has no visibility set, instead of an array with all fields. (optional)
     * @param string[] $search_text Search text in the user field title. Default empty array. OR is performed among multiple array items (optional)
     * @param string $sort_attr Sort by this field, default value - id. Options: title, id (optional)
     * @param string $sort_dir Sorting Direction: asc &#x3D; ascending, desc &#x3D; descending, default - desc (optional)
     * @param int $page Page to return, default 1 (optional)
     * @param int $page_size Maximum number of results per page, default 200 (optional)
     * @param string $lang Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language (optional)
     * @param int $get_total_count If 1 the count of found items will be returned. Options: 0, 1 default 0 (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ManageUserfieldIndexResponse
     */
    public function userfieldManagev1userFields($branch_ids = null, $branch_codes = null, $user_id = null, $as_array = null, $skip_all = null, $search_text = null, $sort_attr = null, $sort_dir = null, $page = null, $page_size = null, $lang = null, $get_total_count = null)
    {
        list($response) = $this->userfieldManagev1userFieldsWithHttpInfo($branch_ids, $branch_codes, $user_id, $as_array, $skip_all, $search_text, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count);
        return $response;
    }

    /**
     * Operation userfieldManagev1userFieldsWithHttpInfo
     *
     * Retrieves the list of user additional fields, filtered on input parameters
     *
     * @param string[] $branch_ids Filter user additional fields by branch - it applies field visibility by branch. Will be merged with the &amp;quot;branch_codes&amp;quot; parameter (optional)
     * @param string[] $branch_codes Filter user additional fields by branch - it applies field visibility by branch. Will be merged with the &amp;quot;branch_ids&amp;quot; parameter (optional)
     * @param int $user_id Filter user additional fields by user ID. If  it is passed and branch_ids is not not passed, the branches of requested user will be taken. (optional)
     * @param int $as_array If it is not passed the responce will be simplified paginated list. If it is passed the responce will contains fully filled list (drop down with options, filled countries, etc.) (optional)
     * @param int $skip_all Set this parameter to 1 in cases when the condition is to return empty array if the requested branch has no visibility set, instead of an array with all fields. (optional)
     * @param string[] $search_text Search text in the user field title. Default empty array. OR is performed among multiple array items (optional)
     * @param string $sort_attr Sort by this field, default value - id. Options: title, id (optional)
     * @param string $sort_dir Sorting Direction: asc &#x3D; ascending, desc &#x3D; descending, default - desc (optional)
     * @param int $page Page to return, default 1 (optional)
     * @param int $page_size Maximum number of results per page, default 200 (optional)
     * @param string $lang Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language (optional)
     * @param int $get_total_count If 1 the count of found items will be returned. Options: 0, 1 default 0 (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ManageUserfieldIndexResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function userfieldManagev1userFieldsWithHttpInfo($branch_ids = null, $branch_codes = null, $user_id = null, $as_array = null, $skip_all = null, $search_text = null, $sort_attr = null, $sort_dir = null, $page = null, $page_size = null, $lang = null, $get_total_count = null)
    {
        // parse inputs
        $resourcePath = "/manage/v1/user_fields";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if (is_array($branch_ids)) {
            $branch_ids = $this->apiClient->getSerializer()->serializeCollection($branch_ids, 'csv', true);
        }
        if ($branch_ids !== null) {
            $queryParams['branch_ids'] = $this->apiClient->getSerializer()->toQueryValue($branch_ids);
        }
        // query params
        if (is_array($branch_codes)) {
            $branch_codes = $this->apiClient->getSerializer()->serializeCollection($branch_codes, 'csv', true);
        }
        if ($branch_codes !== null) {
            $queryParams['branch_codes'] = $this->apiClient->getSerializer()->toQueryValue($branch_codes);
        }
        // query params
        if ($user_id !== null) {
            $queryParams['user_id'] = $this->apiClient->getSerializer()->toQueryValue($user_id);
        }
        // query params
        if ($as_array !== null) {
            $queryParams['as_array'] = $this->apiClient->getSerializer()->toQueryValue($as_array);
        }
        // query params
        if ($skip_all !== null) {
            $queryParams['skip_all'] = $this->apiClient->getSerializer()->toQueryValue($skip_all);
        }
        // query params
        if (is_array($search_text)) {
            $search_text = $this->apiClient->getSerializer()->serializeCollection($search_text, 'brackets', true);
        }
        if ($search_text !== null) {
            $queryParams['search_text'] = $this->apiClient->getSerializer()->toQueryValue($search_text);
        }
        // query params
        if ($sort_attr !== null) {
            $queryParams['sort_attr'] = $this->apiClient->getSerializer()->toQueryValue($sort_attr);
        }
        // query params
        if ($sort_dir !== null) {
            $queryParams['sort_dir'] = $this->apiClient->getSerializer()->toQueryValue($sort_dir);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($page_size !== null) {
            $queryParams['page_size'] = $this->apiClient->getSerializer()->toQueryValue($page_size);
        }
        // query params
        if ($lang !== null) {
            $queryParams['lang'] = $this->apiClient->getSerializer()->toQueryValue($lang);
        }
        // query params
        if ($get_total_count !== null) {
            $queryParams['get_total_count'] = $this->apiClient->getSerializer()->toQueryValue($get_total_count);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ManageUserfieldIndexResponse',
                '/manage/v1/user_fields'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ManageUserfieldIndexResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ManageUserfieldIndexResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation userfieldManagev1userFields_0
     *
     * Create user field
     *
     * @param \Swagger\Client\Model\ManageUserfieldCreateSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ManageUserfieldCreateResponse
     */
    public function userfieldManagev1userFields_0($body = null)
    {
        list($response) = $this->userfieldManagev1userFields_0WithHttpInfo($body);
        return $response;
    }

    /**
     * Operation userfieldManagev1userFields_0WithHttpInfo
     *
     * Create user field
     *
     * @param \Swagger\Client\Model\ManageUserfieldCreateSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ManageUserfieldCreateResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function userfieldManagev1userFields_0WithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/manage/v1/user_fields";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ManageUserfieldCreateResponse',
                '/manage/v1/user_fields'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ManageUserfieldCreateResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ManageUserfieldCreateResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation userfieldManagev1userFieldsfieldId
     *
     * Get User addtional filds info
     *
     * @param int $field_id Id of selected field. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ManageUserfieldViewResponse
     */
    public function userfieldManagev1userFieldsfieldId($field_id)
    {
        list($response) = $this->userfieldManagev1userFieldsfieldIdWithHttpInfo($field_id);
        return $response;
    }

    /**
     * Operation userfieldManagev1userFieldsfieldIdWithHttpInfo
     *
     * Get User addtional filds info
     *
     * @param int $field_id Id of selected field. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ManageUserfieldViewResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function userfieldManagev1userFieldsfieldIdWithHttpInfo($field_id)
    {
        // verify the required parameter 'field_id' is set
        if ($field_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $field_id when calling userfieldManagev1userFieldsfieldId');
        }
        // parse inputs
        $resourcePath = "/manage/v1/user_fields/{field_id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($field_id !== null) {
            $resourcePath = str_replace(
                "{" . "field_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($field_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ManageUserfieldViewResponse',
                '/manage/v1/user_fields/{field_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ManageUserfieldViewResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ManageUserfieldViewResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation userfieldManagev1userFieldsfieldId_0
     *
     * Update user fields
     *
     * @param int $field_id Id of selected field. (required)
     * @param \Swagger\Client\Model\ManageUserfieldUpdateSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ManageUserfieldUpdateResponse
     */
    public function userfieldManagev1userFieldsfieldId_0($field_id, $body = null)
    {
        list($response) = $this->userfieldManagev1userFieldsfieldId_0WithHttpInfo($field_id, $body);
        return $response;
    }

    /**
     * Operation userfieldManagev1userFieldsfieldId_0WithHttpInfo
     *
     * Update user fields
     *
     * @param int $field_id Id of selected field. (required)
     * @param \Swagger\Client\Model\ManageUserfieldUpdateSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ManageUserfieldUpdateResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function userfieldManagev1userFieldsfieldId_0WithHttpInfo($field_id, $body = null)
    {
        // verify the required parameter 'field_id' is set
        if ($field_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $field_id when calling userfieldManagev1userFieldsfieldId_0');
        }
        // parse inputs
        $resourcePath = "/manage/v1/user_fields/{field_id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($field_id !== null) {
            $resourcePath = str_replace(
                "{" . "field_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($field_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ManageUserfieldUpdateResponse',
                '/manage/v1/user_fields/{field_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ManageUserfieldUpdateResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ManageUserfieldUpdateResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation userfieldManagev1userFieldsfieldId_1
     *
     * Deletes one user field
     *
     * @param int $field_id Id of selected field. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ManageUserfieldDeleteResponse
     */
    public function userfieldManagev1userFieldsfieldId_1($field_id)
    {
        list($response) = $this->userfieldManagev1userFieldsfieldId_1WithHttpInfo($field_id);
        return $response;
    }

    /**
     * Operation userfieldManagev1userFieldsfieldId_1WithHttpInfo
     *
     * Deletes one user field
     *
     * @param int $field_id Id of selected field. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ManageUserfieldDeleteResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function userfieldManagev1userFieldsfieldId_1WithHttpInfo($field_id)
    {
        // verify the required parameter 'field_id' is set
        if ($field_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $field_id when calling userfieldManagev1userFieldsfieldId_1');
        }
        // parse inputs
        $resourcePath = "/manage/v1/user_fields/{field_id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($field_id !== null) {
            $resourcePath = str_replace(
                "{" . "field_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($field_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ManageUserfieldDeleteResponse',
                '/manage/v1/user_fields/{field_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ManageUserfieldDeleteResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ManageUserfieldDeleteResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
