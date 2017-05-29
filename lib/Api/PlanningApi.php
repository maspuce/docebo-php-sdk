<?php
/**
 * PlanningApi
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
 * PlanningApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PlanningApi
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
     * @return PlanningApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation planningSkillv1planning
     *
     * Retrieves all planning periods, filtered on input parameters
     *
     * @param string $title Search text in the planning period title. (optional)
     * @param string $description Search text in the planning period description. (optional)
     * @param string $sort_attr Sort by this field, default value - start_date. Options: title, start_date, end_date (optional)
     * @param string $sort_dir Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - asc (optional)
     * @param int $page Page to return, default 1 (optional)
     * @param int $page_size Maximum number of results per page, default 200 (optional)
     * @param string $lang Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language (optional)
     * @param string $start_date Start date of a planning period (optional)
     * @param string $end_date End date of a planning period (optional)
     * @param int $get_total_count If 1 the count of found items will be returned. Options: 0, 1 default 0 (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\SkillPlanningListResponse
     */
    public function planningSkillv1planning($title = null, $description = null, $sort_attr = null, $sort_dir = null, $page = null, $page_size = null, $lang = null, $start_date = null, $end_date = null, $get_total_count = null)
    {
        list($response) = $this->planningSkillv1planningWithHttpInfo($title, $description, $sort_attr, $sort_dir, $page, $page_size, $lang, $start_date, $end_date, $get_total_count);
        return $response;
    }

    /**
     * Operation planningSkillv1planningWithHttpInfo
     *
     * Retrieves all planning periods, filtered on input parameters
     *
     * @param string $title Search text in the planning period title. (optional)
     * @param string $description Search text in the planning period description. (optional)
     * @param string $sort_attr Sort by this field, default value - start_date. Options: title, start_date, end_date (optional)
     * @param string $sort_dir Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - asc (optional)
     * @param int $page Page to return, default 1 (optional)
     * @param int $page_size Maximum number of results per page, default 200 (optional)
     * @param string $lang Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language (optional)
     * @param string $start_date Start date of a planning period (optional)
     * @param string $end_date End date of a planning period (optional)
     * @param int $get_total_count If 1 the count of found items will be returned. Options: 0, 1 default 0 (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\SkillPlanningListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function planningSkillv1planningWithHttpInfo($title = null, $description = null, $sort_attr = null, $sort_dir = null, $page = null, $page_size = null, $lang = null, $start_date = null, $end_date = null, $get_total_count = null)
    {
        // parse inputs
        $resourcePath = "/skill/v1/planning";
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
        if ($title !== null) {
            $queryParams['title'] = $this->apiClient->getSerializer()->toQueryValue($title);
        }
        // query params
        if ($description !== null) {
            $queryParams['description'] = $this->apiClient->getSerializer()->toQueryValue($description);
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
        if ($start_date !== null) {
            $queryParams['start_date'] = $this->apiClient->getSerializer()->toQueryValue($start_date);
        }
        // query params
        if ($end_date !== null) {
            $queryParams['end_date'] = $this->apiClient->getSerializer()->toQueryValue($end_date);
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
                '\Swagger\Client\Model\SkillPlanningListResponse',
                '/skill/v1/planning'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\SkillPlanningListResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\SkillPlanningListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation planningSkillv1planning_0
     *
     * Creates a new Planning Period
     *
     * @param \Swagger\Client\Model\SkillPlanningCreateSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\SkillPlanningCreateResponse
     */
    public function planningSkillv1planning_0($body = null)
    {
        list($response) = $this->planningSkillv1planning_0WithHttpInfo($body);
        return $response;
    }

    /**
     * Operation planningSkillv1planning_0WithHttpInfo
     *
     * Creates a new Planning Period
     *
     * @param \Swagger\Client\Model\SkillPlanningCreateSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\SkillPlanningCreateResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function planningSkillv1planning_0WithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/skill/v1/planning";
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
                '\Swagger\Client\Model\SkillPlanningCreateResponse',
                '/skill/v1/planning'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\SkillPlanningCreateResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\SkillPlanningCreateResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation planningSkillv1planning_1
     *
     * Deletes one or many Planning Periods
     *
     * @param \Swagger\Client\Model\SkillPlanningDeleteSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\SkillPlanningDeleteResponse
     */
    public function planningSkillv1planning_1($body = null)
    {
        list($response) = $this->planningSkillv1planning_1WithHttpInfo($body);
        return $response;
    }

    /**
     * Operation planningSkillv1planning_1WithHttpInfo
     *
     * Deletes one or many Planning Periods
     *
     * @param \Swagger\Client\Model\SkillPlanningDeleteSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\SkillPlanningDeleteResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function planningSkillv1planning_1WithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/skill/v1/planning";
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\SkillPlanningDeleteResponse',
                '/skill/v1/planning'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\SkillPlanningDeleteResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\SkillPlanningDeleteResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation planningSkillv1planningplanningPeriodId
     *
     * Returns the details of a Planning period
     *
     * @param int $planning_period_id ID of the planning (required)
     * @param string $lang Language code. Language used to process input parameters and provide the output. Default - Platform default language (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\SkillPlanningViewResponse
     */
    public function planningSkillv1planningplanningPeriodId($planning_period_id, $lang = null)
    {
        list($response) = $this->planningSkillv1planningplanningPeriodIdWithHttpInfo($planning_period_id, $lang);
        return $response;
    }

    /**
     * Operation planningSkillv1planningplanningPeriodIdWithHttpInfo
     *
     * Returns the details of a Planning period
     *
     * @param int $planning_period_id ID of the planning (required)
     * @param string $lang Language code. Language used to process input parameters and provide the output. Default - Platform default language (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\SkillPlanningViewResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function planningSkillv1planningplanningPeriodIdWithHttpInfo($planning_period_id, $lang = null)
    {
        // verify the required parameter 'planning_period_id' is set
        if ($planning_period_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $planning_period_id when calling planningSkillv1planningplanningPeriodId');
        }
        // parse inputs
        $resourcePath = "/skill/v1/planning/{planning_period_id}";
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
        if ($lang !== null) {
            $queryParams['lang'] = $this->apiClient->getSerializer()->toQueryValue($lang);
        }
        // path params
        if ($planning_period_id !== null) {
            $resourcePath = str_replace(
                "{" . "planning_period_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($planning_period_id),
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
                '\Swagger\Client\Model\SkillPlanningViewResponse',
                '/skill/v1/planning/{planning_period_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\SkillPlanningViewResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\SkillPlanningViewResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation planningSkillv1planningplanningPeriodId_0
     *
     * Updates an existing Planning Period
     *
     * @param \Swagger\Client\Model\SkillPlanningUpdateSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\SkillPlanningUpdateResponse
     */
    public function planningSkillv1planningplanningPeriodId_0($body = null)
    {
        list($response) = $this->planningSkillv1planningplanningPeriodId_0WithHttpInfo($body);
        return $response;
    }

    /**
     * Operation planningSkillv1planningplanningPeriodId_0WithHttpInfo
     *
     * Updates an existing Planning Period
     *
     * @param \Swagger\Client\Model\SkillPlanningUpdateSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\SkillPlanningUpdateResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function planningSkillv1planningplanningPeriodId_0WithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/skill/v1/planning/{planning_period_id}";
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\SkillPlanningUpdateResponse',
                '/skill/v1/planning/{planning_period_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\SkillPlanningUpdateResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\SkillPlanningUpdateResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
