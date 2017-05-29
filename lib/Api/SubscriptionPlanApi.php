<?php
/**
 * SubscriptionPlanApi
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
 * SubscriptionPlanApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SubscriptionPlanApi
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
     * @return SubscriptionPlanApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation subscriptionPlanLearnv1subPlan
     *
     * Retrieves all subscription plans, filtered on input parameters
     *
     * @param int $bundle_id Filter returned plans by subscription bundle (optional)
     * @param string $code Filter returned plans by code (optional)
     * @param string[] $subscription_title Search text in the subscription plan title. Default empty array. OR is performed across array items (optional)
     * @param string[] $subscription_description Search text in the subscription bundle description. Default empty array. OR is performed across array items (optional)
     * @param string $sort_attr Sort by this field, default value - id. Options: type, id (optional)
     * @param string $sort_dir Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc (optional)
     * @param string $lang Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language (optional)
     * @param int $page Page to return, default 1 (optional)
     * @param int $page_size Maximum number of results per page, default 200 (optional)
     * @param int $get_total_count If 1 the count of found items will be returned. Options: 0, 1 default 0 (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\LearnSubscriptionplanIndexResponse
     */
    public function subscriptionPlanLearnv1subPlan($bundle_id = null, $code = null, $subscription_title = null, $subscription_description = null, $sort_attr = null, $sort_dir = null, $lang = null, $page = null, $page_size = null, $get_total_count = null)
    {
        list($response) = $this->subscriptionPlanLearnv1subPlanWithHttpInfo($bundle_id, $code, $subscription_title, $subscription_description, $sort_attr, $sort_dir, $lang, $page, $page_size, $get_total_count);
        return $response;
    }

    /**
     * Operation subscriptionPlanLearnv1subPlanWithHttpInfo
     *
     * Retrieves all subscription plans, filtered on input parameters
     *
     * @param int $bundle_id Filter returned plans by subscription bundle (optional)
     * @param string $code Filter returned plans by code (optional)
     * @param string[] $subscription_title Search text in the subscription plan title. Default empty array. OR is performed across array items (optional)
     * @param string[] $subscription_description Search text in the subscription bundle description. Default empty array. OR is performed across array items (optional)
     * @param string $sort_attr Sort by this field, default value - id. Options: type, id (optional)
     * @param string $sort_dir Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc (optional)
     * @param string $lang Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language (optional)
     * @param int $page Page to return, default 1 (optional)
     * @param int $page_size Maximum number of results per page, default 200 (optional)
     * @param int $get_total_count If 1 the count of found items will be returned. Options: 0, 1 default 0 (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\LearnSubscriptionplanIndexResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function subscriptionPlanLearnv1subPlanWithHttpInfo($bundle_id = null, $code = null, $subscription_title = null, $subscription_description = null, $sort_attr = null, $sort_dir = null, $lang = null, $page = null, $page_size = null, $get_total_count = null)
    {
        // parse inputs
        $resourcePath = "/learn/v1/sub_plan";
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
        if ($bundle_id !== null) {
            $queryParams['bundle_id'] = $this->apiClient->getSerializer()->toQueryValue($bundle_id);
        }
        // query params
        if ($code !== null) {
            $queryParams['code'] = $this->apiClient->getSerializer()->toQueryValue($code);
        }
        // query params
        if (is_array($subscription_title)) {
            $subscription_title = $this->apiClient->getSerializer()->serializeCollection($subscription_title, 'brackets', true);
        }
        if ($subscription_title !== null) {
            $queryParams['subscription_title'] = $this->apiClient->getSerializer()->toQueryValue($subscription_title);
        }
        // query params
        if (is_array($subscription_description)) {
            $subscription_description = $this->apiClient->getSerializer()->serializeCollection($subscription_description, 'brackets', true);
        }
        if ($subscription_description !== null) {
            $queryParams['subscription_description'] = $this->apiClient->getSerializer()->toQueryValue($subscription_description);
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
        if ($lang !== null) {
            $queryParams['lang'] = $this->apiClient->getSerializer()->toQueryValue($lang);
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
                '\Swagger\Client\Model\LearnSubscriptionplanIndexResponse',
                '/learn/v1/sub_plan'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\LearnSubscriptionplanIndexResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\LearnSubscriptionplanIndexResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation subscriptionPlanLearnv1subPlan_0
     *
     * Creates a new Subscription plan
     *
     * @param \Swagger\Client\Model\LearnSubscriptionplanCreateSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\LearnSubscriptionplanCreateResponse
     */
    public function subscriptionPlanLearnv1subPlan_0($body = null)
    {
        list($response) = $this->subscriptionPlanLearnv1subPlan_0WithHttpInfo($body);
        return $response;
    }

    /**
     * Operation subscriptionPlanLearnv1subPlan_0WithHttpInfo
     *
     * Creates a new Subscription plan
     *
     * @param \Swagger\Client\Model\LearnSubscriptionplanCreateSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\LearnSubscriptionplanCreateResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function subscriptionPlanLearnv1subPlan_0WithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/learn/v1/sub_plan";
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
                '\Swagger\Client\Model\LearnSubscriptionplanCreateResponse',
                '/learn/v1/sub_plan'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\LearnSubscriptionplanCreateResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\LearnSubscriptionplanCreateResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation subscriptionPlanLearnv1subPlanbatch
     *
     * Batch import for subscription bundles visibility
     *
     * @param \Swagger\Client\Model\LearnSubscriptionplanBatchSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\LearnSubscriptionplanBatchResponse
     */
    public function subscriptionPlanLearnv1subPlanbatch($body = null)
    {
        list($response) = $this->subscriptionPlanLearnv1subPlanbatchWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation subscriptionPlanLearnv1subPlanbatchWithHttpInfo
     *
     * Batch import for subscription bundles visibility
     *
     * @param \Swagger\Client\Model\LearnSubscriptionplanBatchSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\LearnSubscriptionplanBatchResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function subscriptionPlanLearnv1subPlanbatchWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/learn/v1/sub_plan/batch";
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
                '\Swagger\Client\Model\LearnSubscriptionplanBatchResponse',
                '/learn/v1/sub_plan/batch'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\LearnSubscriptionplanBatchResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\LearnSubscriptionplanBatchResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation subscriptionPlanLearnv1subPlanplanId
     *
     * View a Subscription plan
     *
     * @param int $plan_id ID of subscription plan to fetch (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\LearnSubscriptionplanViewResponse
     */
    public function subscriptionPlanLearnv1subPlanplanId($plan_id)
    {
        list($response) = $this->subscriptionPlanLearnv1subPlanplanIdWithHttpInfo($plan_id);
        return $response;
    }

    /**
     * Operation subscriptionPlanLearnv1subPlanplanIdWithHttpInfo
     *
     * View a Subscription plan
     *
     * @param int $plan_id ID of subscription plan to fetch (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\LearnSubscriptionplanViewResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function subscriptionPlanLearnv1subPlanplanIdWithHttpInfo($plan_id)
    {
        // verify the required parameter 'plan_id' is set
        if ($plan_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $plan_id when calling subscriptionPlanLearnv1subPlanplanId');
        }
        // parse inputs
        $resourcePath = "/learn/v1/sub_plan/{plan_id}";
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
        if ($plan_id !== null) {
            $resourcePath = str_replace(
                "{" . "plan_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($plan_id),
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
                '\Swagger\Client\Model\LearnSubscriptionplanViewResponse',
                '/learn/v1/sub_plan/{plan_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\LearnSubscriptionplanViewResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\LearnSubscriptionplanViewResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation subscriptionPlanLearnv1subPlanplanId_0
     *
     * Update a Subscription plan
     *
     * @param int $plan_id ID of subscription plan to update (required)
     * @param \Swagger\Client\Model\LearnSubscriptionplanUpdateSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\LearnSubscriptionplanUpdateResponse
     */
    public function subscriptionPlanLearnv1subPlanplanId_0($plan_id, $body = null)
    {
        list($response) = $this->subscriptionPlanLearnv1subPlanplanId_0WithHttpInfo($plan_id, $body);
        return $response;
    }

    /**
     * Operation subscriptionPlanLearnv1subPlanplanId_0WithHttpInfo
     *
     * Update a Subscription plan
     *
     * @param int $plan_id ID of subscription plan to update (required)
     * @param \Swagger\Client\Model\LearnSubscriptionplanUpdateSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\LearnSubscriptionplanUpdateResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function subscriptionPlanLearnv1subPlanplanId_0WithHttpInfo($plan_id, $body = null)
    {
        // verify the required parameter 'plan_id' is set
        if ($plan_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $plan_id when calling subscriptionPlanLearnv1subPlanplanId_0');
        }
        // parse inputs
        $resourcePath = "/learn/v1/sub_plan/{plan_id}";
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
        if ($plan_id !== null) {
            $resourcePath = str_replace(
                "{" . "plan_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($plan_id),
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
                '\Swagger\Client\Model\LearnSubscriptionplanUpdateResponse',
                '/learn/v1/sub_plan/{plan_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\LearnSubscriptionplanUpdateResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\LearnSubscriptionplanUpdateResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation subscriptionPlanLearnv1subPlanplanId_1
     *
     * Deletes one subscription plan
     *
     * @param int $plan_id ID of subscription plan to fetch (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\LearnSubscriptionplanDeleteResponse
     */
    public function subscriptionPlanLearnv1subPlanplanId_1($plan_id)
    {
        list($response) = $this->subscriptionPlanLearnv1subPlanplanId_1WithHttpInfo($plan_id);
        return $response;
    }

    /**
     * Operation subscriptionPlanLearnv1subPlanplanId_1WithHttpInfo
     *
     * Deletes one subscription plan
     *
     * @param int $plan_id ID of subscription plan to fetch (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\LearnSubscriptionplanDeleteResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function subscriptionPlanLearnv1subPlanplanId_1WithHttpInfo($plan_id)
    {
        // verify the required parameter 'plan_id' is set
        if ($plan_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $plan_id when calling subscriptionPlanLearnv1subPlanplanId_1');
        }
        // parse inputs
        $resourcePath = "/learn/v1/sub_plan/{plan_id}";
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
        if ($plan_id !== null) {
            $resourcePath = str_replace(
                "{" . "plan_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($plan_id),
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
                '\Swagger\Client\Model\LearnSubscriptionplanDeleteResponse',
                '/learn/v1/sub_plan/{plan_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\LearnSubscriptionplanDeleteResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\LearnSubscriptionplanDeleteResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation subscriptionPlanLearnv1subPlanpurchase
     *
     * Purchasing subscription plan
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\LearnSubscriptionplanPurchaseResponse
     */
    public function subscriptionPlanLearnv1subPlanpurchase()
    {
        list($response) = $this->subscriptionPlanLearnv1subPlanpurchaseWithHttpInfo();
        return $response;
    }

    /**
     * Operation subscriptionPlanLearnv1subPlanpurchaseWithHttpInfo
     *
     * Purchasing subscription plan
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\LearnSubscriptionplanPurchaseResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function subscriptionPlanLearnv1subPlanpurchaseWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/learn/v1/sub_plan/purchase";
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
                '\Swagger\Client\Model\LearnSubscriptionplanPurchaseResponse',
                '/learn/v1/sub_plan/purchase'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\LearnSubscriptionplanPurchaseResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\LearnSubscriptionplanPurchaseResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
