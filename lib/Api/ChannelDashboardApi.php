<?php
/**
 * ChannelDashboardApi
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
 * ChannelDashboardApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChannelDashboardApi
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
     * @return ChannelDashboardApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation channelDashboardLearnv1channels
     *
     * List of Channels assets
     *
     * @param int $from Page to return, default 0 (optional)
     * @param int $count Maximum number of results per page, default 10 (optional)
     * @param int $items_per_channel Count of items per channel (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\LearnChanneldashboardListResponse
     */
    public function channelDashboardLearnv1channels($from = null, $count = null, $items_per_channel = null)
    {
        list($response) = $this->channelDashboardLearnv1channelsWithHttpInfo($from, $count, $items_per_channel);
        return $response;
    }

    /**
     * Operation channelDashboardLearnv1channelsWithHttpInfo
     *
     * List of Channels assets
     *
     * @param int $from Page to return, default 0 (optional)
     * @param int $count Maximum number of results per page, default 10 (optional)
     * @param int $items_per_channel Count of items per channel (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\LearnChanneldashboardListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function channelDashboardLearnv1channelsWithHttpInfo($from = null, $count = null, $items_per_channel = null)
    {
        // parse inputs
        $resourcePath = "/learn/v1/channels";
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
        if ($from !== null) {
            $queryParams['from'] = $this->apiClient->getSerializer()->toQueryValue($from);
        }
        // query params
        if ($count !== null) {
            $queryParams['count'] = $this->apiClient->getSerializer()->toQueryValue($count);
        }
        // query params
        if ($items_per_channel !== null) {
            $queryParams['items_per_channel'] = $this->apiClient->getSerializer()->toQueryValue($items_per_channel);
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
                '\Swagger\Client\Model\LearnChanneldashboardListResponse',
                '/learn/v1/channels'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\LearnChanneldashboardListResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\LearnChanneldashboardListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation channelDashboardLearnv1channelschannelIdassets
     *
     * View channel assets
     *
     * @param int $channel_id ID of the channel (required)
     * @param int $from Page to return, default 0 (optional)
     * @param int $count Maximum number of results per page, default 10 (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\LearnChanneldashboardViewResponse
     */
    public function channelDashboardLearnv1channelschannelIdassets($channel_id, $from = null, $count = null)
    {
        list($response) = $this->channelDashboardLearnv1channelschannelIdassetsWithHttpInfo($channel_id, $from, $count);
        return $response;
    }

    /**
     * Operation channelDashboardLearnv1channelschannelIdassetsWithHttpInfo
     *
     * View channel assets
     *
     * @param int $channel_id ID of the channel (required)
     * @param int $from Page to return, default 0 (optional)
     * @param int $count Maximum number of results per page, default 10 (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\LearnChanneldashboardViewResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function channelDashboardLearnv1channelschannelIdassetsWithHttpInfo($channel_id, $from = null, $count = null)
    {
        // verify the required parameter 'channel_id' is set
        if ($channel_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $channel_id when calling channelDashboardLearnv1channelschannelIdassets');
        }
        // parse inputs
        $resourcePath = "/learn/v1/channels/{channel_id}/assets";
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
        if ($from !== null) {
            $queryParams['from'] = $this->apiClient->getSerializer()->toQueryValue($from);
        }
        // query params
        if ($count !== null) {
            $queryParams['count'] = $this->apiClient->getSerializer()->toQueryValue($count);
        }
        // path params
        if ($channel_id !== null) {
            $resourcePath = str_replace(
                "{" . "channel_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($channel_id),
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
                '\Swagger\Client\Model\LearnChanneldashboardViewResponse',
                '/learn/v1/channels/{channel_id}/assets'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\LearnChanneldashboardViewResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\LearnChanneldashboardViewResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
