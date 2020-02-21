<?php
/*
 * Pipedrive
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace Pipedrive\Controllers;

use Pipedrive\APIException;
use Pipedrive\APIHelper;
use Pipedrive\Configuration;
use Pipedrive\Models;
use Pipedrive\Exceptions;
use Pipedrive\Http\HttpRequest;
use Pipedrive\Http\HttpResponse;
use Pipedrive\Http\HttpMethod;
use Pipedrive\Http\HttpContext;
use Pipedrive\OAuthManager;
use Pipedrive\Servers;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class ProductFieldsController extends BaseController
{
    /**
     * @var ProductFieldsController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return ProductFieldsController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * Marks multiple fields as deleted.
     *
     * @param string $ids Comma-separated field IDs to delete
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteMultipleProductFieldsInBulk(
        $ids
    ) {
        //check or get oauth token
        OAuthManager::getInstance()->checkAuthorization();

        //prepare query string for API call
        $_queryBuilder = '/productFields';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'ids' => $ids,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json',
            'Authorization' => sprintf('Bearer %1$s', Configuration::$oAuthToken->accessToken)
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::DELETE, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::delete($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'Pipedrive\\Models\\DeleteMultipleProductFieldsResponse');
    }

    /**
     * Returns data about all product fields
     *
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getAllProductFields()
    {
        //check or get oauth token
        OAuthManager::getInstance()->checkAuthorization();

        //prepare query string for API call
        $_queryBuilder = '/productFields';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json',
            'Authorization' => sprintf('Bearer %1$s', Configuration::$oAuthToken->accessToken)
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'Pipedrive\\Models\\GetAllProductFieldsResponse');
    }

    /**
     * Adds a new product field. For more information on adding a new custom field, see <a href="https:
     * //pipedrive.readme.io/docs/adding-a-new-custom-field" target="_blank" rel="noopener noreferrer">this
     * tutorial</a>.
     *
     * @param object $body (optional) TODO: type description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function addANewProductField(
        $body = null
    ) {
        //check or get oauth token
        OAuthManager::getInstance()->checkAuthorization();

        //prepare query string for API call
        $_queryBuilder = '/productFields';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json',
            'content-type'  => 'application/json; charset=utf-8',
            'Authorization' => sprintf('Bearer %1$s', Configuration::$oAuthToken->accessToken)
        );

        //json encode body
        $_bodyJson = Request\Body::Json($body);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, $_bodyJson);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'Pipedrive\\Models\\GetProductFieldResponse');
    }

    /**
     * Marks a field as deleted. For more information on how to delete a custom field, see <a href="https:
     * //pipedrive.readme.io/docs/deleting-a-custom-field" target="_blank" rel="noopener noreferrer">this
     * tutorial</a>.
     *
     * @param integer $id ID of the Product Field
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteAProductField(
        $id
    ) {
        //check or get oauth token
        OAuthManager::getInstance()->checkAuthorization();

        //prepare query string for API call
        $_queryBuilder = '/productFields/{id}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'id' => $id,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json',
            'Authorization' => sprintf('Bearer %1$s', Configuration::$oAuthToken->accessToken)
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::DELETE, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::delete($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 410) {
            throw new Exceptions\FailResponseException(
                'The Product Field with the specified ID does not exist or is inaccessible',
                $_httpContext
            );
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'Pipedrive\\Models\\DeleteProductFieldResponse');
    }

    /**
     * Returns data about a specific product field.
     *
     * @param integer $id ID of the Product Field
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getOneProductField(
        $id
    ) {
        //check or get oauth token
        OAuthManager::getInstance()->checkAuthorization();

        //prepare query string for API call
        $_queryBuilder = '/productFields/{id}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'id' => $id,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json',
            'Authorization' => sprintf('Bearer %1$s', Configuration::$oAuthToken->accessToken)
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 410) {
            throw new Exceptions\FailResponseException(
                'The Product Field with the specified ID does not exist or is inaccessible',
                $_httpContext
            );
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'Pipedrive\\Models\\GetProductFieldResponse');
    }

    /**
     * Updates a product field. See an example of updating custom fields’ values in <a href=" https:
     * //pipedrive.readme.io/docs/updating-custom-field-value " target="_blank" rel="noopener
     * noreferrer">this tutorial</a>.
     *
     * @param  array  $options    Array with all options for search
     * @param integer $options['id']      ID of the Product Field
     * @param string  $options['name']    Name of the field
     * @param string  $options['options'] (optional) When field_type is either set or enum, possible options must be
     *                                    supplied as a JSON-encoded sequential array, for example: ["red","blue",
     *                                    "lilac"]
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function updateAProductField(
        $options
    ) {
        //check or get oauth token
        OAuthManager::getInstance()->checkAuthorization();

        //prepare query string for API call
        $_queryBuilder = '/productFields/{id}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'id'      => $this->val($options, 'id'),
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json',
            'Authorization' => sprintf('Bearer %1$s', Configuration::$oAuthToken->accessToken)
        );

        //prepare parameters
        $_parameters = array (
            'name'    => $this->val($options, 'name'),
            'options' => $this->val($options, 'options')
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::PUT, $_headers, $_queryUrl, $_parameters);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::put($_queryUrl, $_headers, Request\Body::Form($_parameters));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'Pipedrive\\Models\\GetProductFieldResponse');
    }


    /**
    * Array access utility method
     * @param  array          $arr         Array of values to read from
     * @param  string         $key         Key to get the value from the array
     * @param  mixed|null     $default     Default value to use if the key was not found
     * @return mixed
     */
    private function val($arr, $key, $default = null)
    {
        if (isset($arr[$key])) {
            return is_bool($arr[$key]) ? var_export($arr[$key], true) : $arr[$key];
        }
        return $default;
    }
}
