<?php
/**
 * SiteApi
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
 * SiteApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SiteApi
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
     * @return SiteApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation siteManagev1sitebootstrap
     *
     * Returns base information: default platform language, active languages, active plugins, color scheme and etc.
     *
     * @param string $theme The theme code to preview. If passed, the returned branding_elements will be loaded based on this value, rather than the active theme (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ManageSiteBootstrapResponse
     */
    public function siteManagev1sitebootstrap($theme = null)
    {
        list($response) = $this->siteManagev1sitebootstrapWithHttpInfo($theme);
        return $response;
    }

    /**
     * Operation siteManagev1sitebootstrapWithHttpInfo
     *
     * Returns base information: default platform language, active languages, active plugins, color scheme and etc.
     *
     * @param string $theme The theme code to preview. If passed, the returned branding_elements will be loaded based on this value, rather than the active theme (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ManageSiteBootstrapResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function siteManagev1sitebootstrapWithHttpInfo($theme = null)
    {
        // parse inputs
        $resourcePath = "/manage/v1/site/bootstrap";
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
        if ($theme !== null) {
            $queryParams['theme'] = $this->apiClient->getSerializer()->toQueryValue($theme);
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
                '\Swagger\Client\Model\ManageSiteBootstrapResponse',
                '/manage/v1/site/bootstrap'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ManageSiteBootstrapResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ManageSiteBootstrapResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation siteManagev1sitehelpdesk
     *
     * Send Request to the sales or help team in the ERP
     *
     * @param \Swagger\Client\Model\ManageSiteHelpDeskSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ManageSiteHelpDeskResponse
     */
    public function siteManagev1sitehelpdesk($body = null)
    {
        list($response) = $this->siteManagev1sitehelpdeskWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation siteManagev1sitehelpdeskWithHttpInfo
     *
     * Send Request to the sales or help team in the ERP
     *
     * @param \Swagger\Client\Model\ManageSiteHelpDeskSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ManageSiteHelpDeskResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function siteManagev1sitehelpdeskWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/manage/v1/site/helpdesk";
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
                '\Swagger\Client\Model\ManageSiteHelpDeskResponse',
                '/manage/v1/site/helpdesk'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ManageSiteHelpDeskResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ManageSiteHelpDeskResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation siteManagev1sitethemethemeCode
     *
     * Apply a theme by theme code
     *
     * @param string $theme_code Identification code of the theme. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ManageSiteThemeResponse
     */
    public function siteManagev1sitethemethemeCode($theme_code)
    {
        list($response) = $this->siteManagev1sitethemethemeCodeWithHttpInfo($theme_code);
        return $response;
    }

    /**
     * Operation siteManagev1sitethemethemeCodeWithHttpInfo
     *
     * Apply a theme by theme code
     *
     * @param string $theme_code Identification code of the theme. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ManageSiteThemeResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function siteManagev1sitethemethemeCodeWithHttpInfo($theme_code)
    {
        // verify the required parameter 'theme_code' is set
        if ($theme_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $theme_code when calling siteManagev1sitethemethemeCode');
        }
        // parse inputs
        $resourcePath = "/manage/v1/site/theme/{theme_code}";
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ManageSiteThemeResponse',
                '/manage/v1/site/theme/{theme_code}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ManageSiteThemeResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ManageSiteThemeResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation siteManagev1sitetranslate
     *
     * Translates the passed array of phrases in all available languages
     *
     * @param \Swagger\Client\Model\ManageSiteTranslateSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ManageSiteTranslateResponse
     */
    public function siteManagev1sitetranslate($body = null)
    {
        list($response) = $this->siteManagev1sitetranslateWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation siteManagev1sitetranslateWithHttpInfo
     *
     * Translates the passed array of phrases in all available languages
     *
     * @param \Swagger\Client\Model\ManageSiteTranslateSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ManageSiteTranslateResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function siteManagev1sitetranslateWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/manage/v1/site/translate";
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
                '\Swagger\Client\Model\ManageSiteTranslateResponse',
                '/manage/v1/site/translate'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ManageSiteTranslateResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ManageSiteTranslateResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation siteManagev1sitetranslations
     *
     * Get translation
     *
     * @param string $lang_code Language code (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ManageSiteTranslationsResponse
     */
    public function siteManagev1sitetranslations($lang_code)
    {
        list($response) = $this->siteManagev1sitetranslationsWithHttpInfo($lang_code);
        return $response;
    }

    /**
     * Operation siteManagev1sitetranslationsWithHttpInfo
     *
     * Get translation
     *
     * @param string $lang_code Language code (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ManageSiteTranslationsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function siteManagev1sitetranslationsWithHttpInfo($lang_code)
    {
        // verify the required parameter 'lang_code' is set
        if ($lang_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $lang_code when calling siteManagev1sitetranslations');
        }
        // parse inputs
        $resourcePath = "/manage/v1/site/translations";
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
        if ($lang_code !== null) {
            $queryParams['lang_code'] = $this->apiClient->getSerializer()->toQueryValue($lang_code);
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
                '\Swagger\Client\Model\ManageSiteTranslationsResponse',
                '/manage/v1/site/translations'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ManageSiteTranslationsResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ManageSiteTranslationsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
