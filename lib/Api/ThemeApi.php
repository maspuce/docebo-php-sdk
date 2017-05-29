<?php
/**
 * ThemeApi
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
 * ThemeApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ThemeApi
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
     * @return ThemeApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation themeManagev1theme
     *
     * View all themes
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ManageThemeIndexResponse
     */
    public function themeManagev1theme()
    {
        list($response) = $this->themeManagev1themeWithHttpInfo();
        return $response;
    }

    /**
     * Operation themeManagev1themeWithHttpInfo
     *
     * View all themes
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ManageThemeIndexResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function themeManagev1themeWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/manage/v1/theme";
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ManageThemeIndexResponse',
                '/manage/v1/theme'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ManageThemeIndexResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ManageThemeIndexResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation themeManagev1themethemeCode
     *
     * View a theme by theme code
     *
     * @param string $theme_code Identification code of the theme. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ManageThemeViewResponse
     */
    public function themeManagev1themethemeCode($theme_code)
    {
        list($response) = $this->themeManagev1themethemeCodeWithHttpInfo($theme_code);
        return $response;
    }

    /**
     * Operation themeManagev1themethemeCodeWithHttpInfo
     *
     * View a theme by theme code
     *
     * @param string $theme_code Identification code of the theme. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ManageThemeViewResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function themeManagev1themethemeCodeWithHttpInfo($theme_code)
    {
        // verify the required parameter 'theme_code' is set
        if ($theme_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $theme_code when calling themeManagev1themethemeCode');
        }
        // parse inputs
        $resourcePath = "/manage/v1/theme/{theme_code}";
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
        if ($theme_code !== null) {
            $resourcePath = str_replace(
                "{" . "theme_code" . "}",
                $this->apiClient->getSerializer()->toPathValue($theme_code),
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
                '\Swagger\Client\Model\ManageThemeViewResponse',
                '/manage/v1/theme/{theme_code}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ManageThemeViewResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ManageThemeViewResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation themeManagev1themethemeCode_0
     *
     * Update a theme by theme code
     *
     * @param string $theme_code Identification code of the theme. (required)
     * @param \Swagger\Client\Model\ManageThemeUpdateSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ManageThemeUpdateResponse
     */
    public function themeManagev1themethemeCode_0($theme_code, $body = null)
    {
        list($response) = $this->themeManagev1themethemeCode_0WithHttpInfo($theme_code, $body);
        return $response;
    }

    /**
     * Operation themeManagev1themethemeCode_0WithHttpInfo
     *
     * Update a theme by theme code
     *
     * @param string $theme_code Identification code of the theme. (required)
     * @param \Swagger\Client\Model\ManageThemeUpdateSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ManageThemeUpdateResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function themeManagev1themethemeCode_0WithHttpInfo($theme_code, $body = null)
    {
        // verify the required parameter 'theme_code' is set
        if ($theme_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $theme_code when calling themeManagev1themethemeCode_0');
        }
        // parse inputs
        $resourcePath = "/manage/v1/theme/{theme_code}";
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
        if ($theme_code !== null) {
            $resourcePath = str_replace(
                "{" . "theme_code" . "}",
                $this->apiClient->getSerializer()->toPathValue($theme_code),
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
                '\Swagger\Client\Model\ManageThemeUpdateResponse',
                '/manage/v1/theme/{theme_code}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ManageThemeUpdateResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ManageThemeUpdateResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation themeManagev1themethemeCode_1
     *
     * Delete a theme
     *
     * @param string $theme_code Identification code of the theme. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ManageThemeDeleteResponse
     */
    public function themeManagev1themethemeCode_1($theme_code)
    {
        list($response) = $this->themeManagev1themethemeCode_1WithHttpInfo($theme_code);
        return $response;
    }

    /**
     * Operation themeManagev1themethemeCode_1WithHttpInfo
     *
     * Delete a theme
     *
     * @param string $theme_code Identification code of the theme. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ManageThemeDeleteResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function themeManagev1themethemeCode_1WithHttpInfo($theme_code)
    {
        // verify the required parameter 'theme_code' is set
        if ($theme_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $theme_code when calling themeManagev1themethemeCode_1');
        }
        // parse inputs
        $resourcePath = "/manage/v1/theme/{theme_code}";
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
        if ($theme_code !== null) {
            $resourcePath = str_replace(
                "{" . "theme_code" . "}",
                $this->apiClient->getSerializer()->toPathValue($theme_code),
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
                '\Swagger\Client\Model\ManageThemeDeleteResponse',
                '/manage/v1/theme/{theme_code}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ManageThemeDeleteResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ManageThemeDeleteResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation themeManagev1themethemeCodevariantidMultidomain
     *
     * Update or create a theme variant by theme code and multidomain id
     *
     * @param string $theme_code Identification code of the theme. (required)
     * @param int $id_multidomain Identification number of the multidomain. (required)
     * @param \Swagger\Client\Model\ManageThemeUpdateVariantSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ManageThemeUpdateVariantResponse
     */
    public function themeManagev1themethemeCodevariantidMultidomain($theme_code, $id_multidomain, $body = null)
    {
        list($response) = $this->themeManagev1themethemeCodevariantidMultidomainWithHttpInfo($theme_code, $id_multidomain, $body);
        return $response;
    }

    /**
     * Operation themeManagev1themethemeCodevariantidMultidomainWithHttpInfo
     *
     * Update or create a theme variant by theme code and multidomain id
     *
     * @param string $theme_code Identification code of the theme. (required)
     * @param int $id_multidomain Identification number of the multidomain. (required)
     * @param \Swagger\Client\Model\ManageThemeUpdateVariantSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ManageThemeUpdateVariantResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function themeManagev1themethemeCodevariantidMultidomainWithHttpInfo($theme_code, $id_multidomain, $body = null)
    {
        // verify the required parameter 'theme_code' is set
        if ($theme_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $theme_code when calling themeManagev1themethemeCodevariantidMultidomain');
        }
        // verify the required parameter 'id_multidomain' is set
        if ($id_multidomain === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_multidomain when calling themeManagev1themethemeCodevariantidMultidomain');
        }
        // parse inputs
        $resourcePath = "/manage/v1/theme/{theme_code}/variant/{id_multidomain}";
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
        if ($theme_code !== null) {
            $resourcePath = str_replace(
                "{" . "theme_code" . "}",
                $this->apiClient->getSerializer()->toPathValue($theme_code),
                $resourcePath
            );
        }
        // path params
        if ($id_multidomain !== null) {
            $resourcePath = str_replace(
                "{" . "id_multidomain" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_multidomain),
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
                '\Swagger\Client\Model\ManageThemeUpdateVariantResponse',
                '/manage/v1/theme/{theme_code}/variant/{id_multidomain}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ManageThemeUpdateVariantResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ManageThemeUpdateVariantResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
