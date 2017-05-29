<?php
/**
 * EnrollmentApi
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
 * EnrollmentApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EnrollmentApi
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
     * @return EnrollmentApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation enrollmentLearnv1enrollmentbatch
     *
     * Batch import assignments
     *
     * @param \Swagger\Client\Model\LearnEnrollmentBatchImportSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\LearnEnrollmentBatchImportResponse
     */
    public function enrollmentLearnv1enrollmentbatch($body = null)
    {
        list($response) = $this->enrollmentLearnv1enrollmentbatchWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation enrollmentLearnv1enrollmentbatchWithHttpInfo
     *
     * Batch import assignments
     *
     * @param \Swagger\Client\Model\LearnEnrollmentBatchImportSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\LearnEnrollmentBatchImportResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function enrollmentLearnv1enrollmentbatchWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/learn/v1/enrollment/batch";
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
                '\Swagger\Client\Model\LearnEnrollmentBatchImportResponse',
                '/learn/v1/enrollment/batch'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\LearnEnrollmentBatchImportResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\LearnEnrollmentBatchImportResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation enrollmentLearnv1enrollments
     *
     * Retrieves information for the specified by id user's enrollments
     *
     * @param int[] $id_user Id of the user to get the entries for, if empty - returns full list (optional)
     * @param string[] $status Filtering by status. (optional)
     * @param string[] $type Filtering by type, possible values: elearning, classroom, webinar, learning_plan (optional)
     * @param string $deadline Return only enrollments that &amp;quot;expire&amp;quot; between the current time and the provided value. (optional)
     * @param int $rating Return only enrollments that have minimum this rating (optional)
     * @param int $channel Filter enrollments that are found inside the given channel (specified by PK) (optional)
     * @param string $search Filtering results by wildcard match on the passed string (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\LearnEnrollmentIndexResponse
     */
    public function enrollmentLearnv1enrollments($id_user = null, $status = null, $type = null, $deadline = null, $rating = null, $channel = null, $search = null)
    {
        list($response) = $this->enrollmentLearnv1enrollmentsWithHttpInfo($id_user, $status, $type, $deadline, $rating, $channel, $search);
        return $response;
    }

    /**
     * Operation enrollmentLearnv1enrollmentsWithHttpInfo
     *
     * Retrieves information for the specified by id user's enrollments
     *
     * @param int[] $id_user Id of the user to get the entries for, if empty - returns full list (optional)
     * @param string[] $status Filtering by status. (optional)
     * @param string[] $type Filtering by type, possible values: elearning, classroom, webinar, learning_plan (optional)
     * @param string $deadline Return only enrollments that &amp;quot;expire&amp;quot; between the current time and the provided value. (optional)
     * @param int $rating Return only enrollments that have minimum this rating (optional)
     * @param int $channel Filter enrollments that are found inside the given channel (specified by PK) (optional)
     * @param string $search Filtering results by wildcard match on the passed string (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\LearnEnrollmentIndexResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function enrollmentLearnv1enrollmentsWithHttpInfo($id_user = null, $status = null, $type = null, $deadline = null, $rating = null, $channel = null, $search = null)
    {
        // parse inputs
        $resourcePath = "/learn/v1/enrollments";
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
        if (is_array($id_user)) {
            $id_user = $this->apiClient->getSerializer()->serializeCollection($id_user, 'brackets', true);
        }
        if ($id_user !== null) {
            $queryParams['id_user'] = $this->apiClient->getSerializer()->toQueryValue($id_user);
        }
        // query params
        if (is_array($status)) {
            $status = $this->apiClient->getSerializer()->serializeCollection($status, 'brackets', true);
        }
        if ($status !== null) {
            $queryParams['status'] = $this->apiClient->getSerializer()->toQueryValue($status);
        }
        // query params
        if (is_array($type)) {
            $type = $this->apiClient->getSerializer()->serializeCollection($type, 'brackets', true);
        }
        if ($type !== null) {
            $queryParams['type'] = $this->apiClient->getSerializer()->toQueryValue($type);
        }
        // query params
        if ($deadline !== null) {
            $queryParams['deadline'] = $this->apiClient->getSerializer()->toQueryValue($deadline);
        }
        // query params
        if ($rating !== null) {
            $queryParams['rating'] = $this->apiClient->getSerializer()->toQueryValue($rating);
        }
        // query params
        if ($channel !== null) {
            $queryParams['channel'] = $this->apiClient->getSerializer()->toQueryValue($channel);
        }
        // query params
        if ($search !== null) {
            $queryParams['search'] = $this->apiClient->getSerializer()->toQueryValue($search);
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
                '\Swagger\Client\Model\LearnEnrollmentIndexResponse',
                '/learn/v1/enrollments'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\LearnEnrollmentIndexResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\LearnEnrollmentIndexResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation enrollmentLearnv1enrollments_0
     *
     * Update enrollment of users to courses (Multiple update)
     *
     * @param \Swagger\Client\Model\LearnEnrollmentUpdateMultipleSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\LearnEnrollmentUpdateMultipleResponse
     */
    public function enrollmentLearnv1enrollments_0($body = null)
    {
        list($response) = $this->enrollmentLearnv1enrollments_0WithHttpInfo($body);
        return $response;
    }

    /**
     * Operation enrollmentLearnv1enrollments_0WithHttpInfo
     *
     * Update enrollment of users to courses (Multiple update)
     *
     * @param \Swagger\Client\Model\LearnEnrollmentUpdateMultipleSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\LearnEnrollmentUpdateMultipleResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function enrollmentLearnv1enrollments_0WithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/learn/v1/enrollments";
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
                '\Swagger\Client\Model\LearnEnrollmentUpdateMultipleResponse',
                '/learn/v1/enrollments'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\LearnEnrollmentUpdateMultipleResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\LearnEnrollmentUpdateMultipleResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation enrollmentLearnv1enrollments_1
     *
     * Enroll user/s in course/s
     *
     * @param \Swagger\Client\Model\LearnEnrollmentCreateSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\LearnEnrollmentCreateResponse
     */
    public function enrollmentLearnv1enrollments_1($body = null)
    {
        list($response) = $this->enrollmentLearnv1enrollments_1WithHttpInfo($body);
        return $response;
    }

    /**
     * Operation enrollmentLearnv1enrollments_1WithHttpInfo
     *
     * Enroll user/s in course/s
     *
     * @param \Swagger\Client\Model\LearnEnrollmentCreateSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\LearnEnrollmentCreateResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function enrollmentLearnv1enrollments_1WithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/learn/v1/enrollments";
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
                '\Swagger\Client\Model\LearnEnrollmentCreateResponse',
                '/learn/v1/enrollments'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\LearnEnrollmentCreateResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\LearnEnrollmentCreateResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation enrollmentLearnv1enrollments_2
     *
     * Un - Enroll users in course/s
     *
     * @param \Swagger\Client\Model\LearnEnrollmentMultipleDeleteSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\LearnEnrollmentMultipleDeleteResponse
     */
    public function enrollmentLearnv1enrollments_2($body = null)
    {
        list($response) = $this->enrollmentLearnv1enrollments_2WithHttpInfo($body);
        return $response;
    }

    /**
     * Operation enrollmentLearnv1enrollments_2WithHttpInfo
     *
     * Un - Enroll users in course/s
     *
     * @param \Swagger\Client\Model\LearnEnrollmentMultipleDeleteSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\LearnEnrollmentMultipleDeleteResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function enrollmentLearnv1enrollments_2WithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/learn/v1/enrollments";
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
                '\Swagger\Client\Model\LearnEnrollmentMultipleDeleteResponse',
                '/learn/v1/enrollments'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\LearnEnrollmentMultipleDeleteResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\LearnEnrollmentMultipleDeleteResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation enrollmentLearnv1enrollmentscourseIduserId
     *
     * Update enrollment of user to course (Single update)
     *
     * @param int $user_id The ID of enrolled user (required)
     * @param int $course_id The ID of course (required)
     * @param \Swagger\Client\Model\LearnEnrollmentUpdateSingleSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\LearnEnrollmentUpdateSingleResponse
     */
    public function enrollmentLearnv1enrollmentscourseIduserId($user_id, $course_id, $body = null)
    {
        list($response) = $this->enrollmentLearnv1enrollmentscourseIduserIdWithHttpInfo($user_id, $course_id, $body);
        return $response;
    }

    /**
     * Operation enrollmentLearnv1enrollmentscourseIduserIdWithHttpInfo
     *
     * Update enrollment of user to course (Single update)
     *
     * @param int $user_id The ID of enrolled user (required)
     * @param int $course_id The ID of course (required)
     * @param \Swagger\Client\Model\LearnEnrollmentUpdateSingleSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\LearnEnrollmentUpdateSingleResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function enrollmentLearnv1enrollmentscourseIduserIdWithHttpInfo($user_id, $course_id, $body = null)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling enrollmentLearnv1enrollmentscourseIduserId');
        }
        // verify the required parameter 'course_id' is set
        if ($course_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $course_id when calling enrollmentLearnv1enrollmentscourseIduserId');
        }
        // parse inputs
        $resourcePath = "/learn/v1/enrollments/{course_id}/{user_id}";
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
        if ($user_id !== null) {
            $resourcePath = str_replace(
                "{" . "user_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($user_id),
                $resourcePath
            );
        }
        // path params
        if ($course_id !== null) {
            $resourcePath = str_replace(
                "{" . "course_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($course_id),
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
                '\Swagger\Client\Model\LearnEnrollmentUpdateSingleResponse',
                '/learn/v1/enrollments/{course_id}/{user_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\LearnEnrollmentUpdateSingleResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\LearnEnrollmentUpdateSingleResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation enrollmentLearnv1enrollmentscourseIduserId_0
     *
     * Enroll user/s in course/s
     *
     * @param int $user_id The ID of user (required)
     * @param int $course_id The ID of course (required)
     * @param \Swagger\Client\Model\LearnEnrollmentCreateSingleSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\LearnEnrollmentCreateSingleResponse
     */
    public function enrollmentLearnv1enrollmentscourseIduserId_0($user_id, $course_id, $body = null)
    {
        list($response) = $this->enrollmentLearnv1enrollmentscourseIduserId_0WithHttpInfo($user_id, $course_id, $body);
        return $response;
    }

    /**
     * Operation enrollmentLearnv1enrollmentscourseIduserId_0WithHttpInfo
     *
     * Enroll user/s in course/s
     *
     * @param int $user_id The ID of user (required)
     * @param int $course_id The ID of course (required)
     * @param \Swagger\Client\Model\LearnEnrollmentCreateSingleSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\LearnEnrollmentCreateSingleResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function enrollmentLearnv1enrollmentscourseIduserId_0WithHttpInfo($user_id, $course_id, $body = null)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling enrollmentLearnv1enrollmentscourseIduserId_0');
        }
        // verify the required parameter 'course_id' is set
        if ($course_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $course_id when calling enrollmentLearnv1enrollmentscourseIduserId_0');
        }
        // parse inputs
        $resourcePath = "/learn/v1/enrollments/{course_id}/{user_id}";
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
        if ($user_id !== null) {
            $resourcePath = str_replace(
                "{" . "user_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($user_id),
                $resourcePath
            );
        }
        // path params
        if ($course_id !== null) {
            $resourcePath = str_replace(
                "{" . "course_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($course_id),
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\LearnEnrollmentCreateSingleResponse',
                '/learn/v1/enrollments/{course_id}/{user_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\LearnEnrollmentCreateSingleResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\LearnEnrollmentCreateSingleResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation enrollmentLearnv1enrollmentsidCourseidUser
     *
     * View information for enrolled user on current course.
     *
     * @param int $id_course ID of the course (required)
     * @param int $id_user ID of the user (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\LearnEnrollmentViewResponse
     */
    public function enrollmentLearnv1enrollmentsidCourseidUser($id_course, $id_user)
    {
        list($response) = $this->enrollmentLearnv1enrollmentsidCourseidUserWithHttpInfo($id_course, $id_user);
        return $response;
    }

    /**
     * Operation enrollmentLearnv1enrollmentsidCourseidUserWithHttpInfo
     *
     * View information for enrolled user on current course.
     *
     * @param int $id_course ID of the course (required)
     * @param int $id_user ID of the user (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\LearnEnrollmentViewResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function enrollmentLearnv1enrollmentsidCourseidUserWithHttpInfo($id_course, $id_user)
    {
        // verify the required parameter 'id_course' is set
        if ($id_course === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_course when calling enrollmentLearnv1enrollmentsidCourseidUser');
        }
        // verify the required parameter 'id_user' is set
        if ($id_user === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_user when calling enrollmentLearnv1enrollmentsidCourseidUser');
        }
        // parse inputs
        $resourcePath = "/learn/v1/enrollments/{id_course}/{id_user}";
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
        if ($id_course !== null) {
            $resourcePath = str_replace(
                "{" . "id_course" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_course),
                $resourcePath
            );
        }
        // path params
        if ($id_user !== null) {
            $resourcePath = str_replace(
                "{" . "id_user" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_user),
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
                '\Swagger\Client\Model\LearnEnrollmentViewResponse',
                '/learn/v1/enrollments/{id_course}/{id_user}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\LearnEnrollmentViewResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\LearnEnrollmentViewResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation enrollmentLearnv1enrollmentsidCourseidUser_0
     *
     * Un - Enroll user in course
     *
     * @param int $id_course The id of the course (required)
     * @param int $id_user The id of enrolled user (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\LearnEnrollmentDeleteResponse
     */
    public function enrollmentLearnv1enrollmentsidCourseidUser_0($id_course, $id_user)
    {
        list($response) = $this->enrollmentLearnv1enrollmentsidCourseidUser_0WithHttpInfo($id_course, $id_user);
        return $response;
    }

    /**
     * Operation enrollmentLearnv1enrollmentsidCourseidUser_0WithHttpInfo
     *
     * Un - Enroll user in course
     *
     * @param int $id_course The id of the course (required)
     * @param int $id_user The id of enrolled user (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\LearnEnrollmentDeleteResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function enrollmentLearnv1enrollmentsidCourseidUser_0WithHttpInfo($id_course, $id_user)
    {
        // verify the required parameter 'id_course' is set
        if ($id_course === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_course when calling enrollmentLearnv1enrollmentsidCourseidUser_0');
        }
        // verify the required parameter 'id_user' is set
        if ($id_user === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_user when calling enrollmentLearnv1enrollmentsidCourseidUser_0');
        }
        // parse inputs
        $resourcePath = "/learn/v1/enrollments/{id_course}/{id_user}";
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
        if ($id_course !== null) {
            $resourcePath = str_replace(
                "{" . "id_course" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_course),
                $resourcePath
            );
        }
        // path params
        if ($id_user !== null) {
            $resourcePath = str_replace(
                "{" . "id_user" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_user),
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
                '\Swagger\Client\Model\LearnEnrollmentDeleteResponse',
                '/learn/v1/enrollments/{id_course}/{id_user}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\LearnEnrollmentDeleteResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\LearnEnrollmentDeleteResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
