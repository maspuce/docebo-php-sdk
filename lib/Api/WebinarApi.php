<?php
/**
 * WebinarApi
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
 * WebinarApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WebinarApi
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
     * @return WebinarApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation webinarLearnv1webinaridSessiondateDayrecording
     *
     * Submit a webinar recording for a session date
     *
     * @param int $id_session The id of the session (required)
     * @param string $date_day The day of the session date (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\LearnWebinarSubmitRecordingResponse
     */
    public function webinarLearnv1webinaridSessiondateDayrecording($id_session, $date_day)
    {
        list($response) = $this->webinarLearnv1webinaridSessiondateDayrecordingWithHttpInfo($id_session, $date_day);
        return $response;
    }

    /**
     * Operation webinarLearnv1webinaridSessiondateDayrecordingWithHttpInfo
     *
     * Submit a webinar recording for a session date
     *
     * @param int $id_session The id of the session (required)
     * @param string $date_day The day of the session date (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\LearnWebinarSubmitRecordingResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function webinarLearnv1webinaridSessiondateDayrecordingWithHttpInfo($id_session, $date_day)
    {
        // verify the required parameter 'id_session' is set
        if ($id_session === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_session when calling webinarLearnv1webinaridSessiondateDayrecording');
        }
        // verify the required parameter 'date_day' is set
        if ($date_day === null) {
            throw new \InvalidArgumentException('Missing the required parameter $date_day when calling webinarLearnv1webinaridSessiondateDayrecording');
        }
        // parse inputs
        $resourcePath = "/learn/v1/webinar/{id_session}/{date_day}/recording";
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
        if ($id_session !== null) {
            $resourcePath = str_replace(
                "{" . "id_session" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_session),
                $resourcePath
            );
        }
        // path params
        if ($date_day !== null) {
            $resourcePath = str_replace(
                "{" . "date_day" . "}",
                $this->apiClient->getSerializer()->toPathValue($date_day),
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\LearnWebinarSubmitRecordingResponse',
                '/learn/v1/webinar/{id_session}/{date_day}/recording'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\LearnWebinarSubmitRecordingResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\LearnWebinarSubmitRecordingResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation webinarLearnv1webinaridSessiondateDayrecordingStatus
     *
     * Check the status of a webinar recording for a session date
     *
     * @param int $id_session The id of the session (required)
     * @param string $date_day The day of the session date (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\LearnWebinarCheckRecordingResponse
     */
    public function webinarLearnv1webinaridSessiondateDayrecordingStatus($id_session, $date_day)
    {
        list($response) = $this->webinarLearnv1webinaridSessiondateDayrecordingStatusWithHttpInfo($id_session, $date_day);
        return $response;
    }

    /**
     * Operation webinarLearnv1webinaridSessiondateDayrecordingStatusWithHttpInfo
     *
     * Check the status of a webinar recording for a session date
     *
     * @param int $id_session The id of the session (required)
     * @param string $date_day The day of the session date (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\LearnWebinarCheckRecordingResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function webinarLearnv1webinaridSessiondateDayrecordingStatusWithHttpInfo($id_session, $date_day)
    {
        // verify the required parameter 'id_session' is set
        if ($id_session === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_session when calling webinarLearnv1webinaridSessiondateDayrecordingStatus');
        }
        // verify the required parameter 'date_day' is set
        if ($date_day === null) {
            throw new \InvalidArgumentException('Missing the required parameter $date_day when calling webinarLearnv1webinaridSessiondateDayrecordingStatus');
        }
        // parse inputs
        $resourcePath = "/learn/v1/webinar/{id_session}/{date_day}/recording_status";
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
        if ($id_session !== null) {
            $resourcePath = str_replace(
                "{" . "id_session" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_session),
                $resourcePath
            );
        }
        // path params
        if ($date_day !== null) {
            $resourcePath = str_replace(
                "{" . "date_day" . "}",
                $this->apiClient->getSerializer()->toPathValue($date_day),
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
                '\Swagger\Client\Model\LearnWebinarCheckRecordingResponse',
                '/learn/v1/webinar/{id_session}/{date_day}/recording_status'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\LearnWebinarCheckRecordingResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\LearnWebinarCheckRecordingResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation webinarLearnv1webinaridSessiondateDayrecording_0
     *
     * Submit a webinar recording for a session date
     *
     * @param int $id_session The id of the session (required)
     * @param string $date_day The day of the session date (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\LearnWebinarDeleteRecordingResponse
     */
    public function webinarLearnv1webinaridSessiondateDayrecording_0($id_session, $date_day)
    {
        list($response) = $this->webinarLearnv1webinaridSessiondateDayrecording_0WithHttpInfo($id_session, $date_day);
        return $response;
    }

    /**
     * Operation webinarLearnv1webinaridSessiondateDayrecording_0WithHttpInfo
     *
     * Submit a webinar recording for a session date
     *
     * @param int $id_session The id of the session (required)
     * @param string $date_day The day of the session date (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\LearnWebinarDeleteRecordingResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function webinarLearnv1webinaridSessiondateDayrecording_0WithHttpInfo($id_session, $date_day)
    {
        // verify the required parameter 'id_session' is set
        if ($id_session === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_session when calling webinarLearnv1webinaridSessiondateDayrecording_0');
        }
        // verify the required parameter 'date_day' is set
        if ($date_day === null) {
            throw new \InvalidArgumentException('Missing the required parameter $date_day when calling webinarLearnv1webinaridSessiondateDayrecording_0');
        }
        // parse inputs
        $resourcePath = "/learn/v1/webinar/{id_session}/{date_day}/recording";
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
        if ($id_session !== null) {
            $resourcePath = str_replace(
                "{" . "id_session" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_session),
                $resourcePath
            );
        }
        // path params
        if ($date_day !== null) {
            $resourcePath = str_replace(
                "{" . "date_day" . "}",
                $this->apiClient->getSerializer()->toPathValue($date_day),
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
                '\Swagger\Client\Model\LearnWebinarDeleteRecordingResponse',
                '/learn/v1/webinar/{id_session}/{date_day}/recording'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\LearnWebinarDeleteRecordingResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\LearnWebinarDeleteRecordingResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
