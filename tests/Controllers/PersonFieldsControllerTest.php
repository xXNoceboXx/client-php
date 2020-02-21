<?php
/*
 * Pipedrive
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace Pipedrive\Tests;

use Pipedrive\APIException;
use Pipedrive\Exceptions;
use Pipedrive\APIHelper;
use Pipedrive\Models;

class PersonFieldsControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Pipedrive\Controllers\PersonFieldsController Controller instance
     */
    protected static $controller;

    /**
     * @var HttpCallBackCatcher Callback
     */
    protected $httpResponse;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass()
    {
        $client = new \Pipedrive\Client();
        self::$controller = $client->getPersonFields();
    }

    /**
     * Setup test
     */
    protected function setUp()
    {
        $this->httpResponse = new HttpCallBackCatcher();
    }

    /**
     * Returns data about all person fields
     */
    public function testTestGetAllPersonFields()
    {

        // Set callback and perform API call
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            self::$controller->getAllPersonFields();
        } catch (APIException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );
    }

    /**
     * Adds a new person field. For more information on adding a new custom field, see <a href="https://pipedrive.readme.io/docs/adding-a-new-custom-field" target="_blank" rel="noopener noreferrer">this tutorial</a>.
     */
    public function testTestAddANewPersonField()
    {
        // Parameters for the API call
        $body = null;

        // Set callback and perform API call
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            self::$controller->addANewPersonField($body);
        } catch (APIException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );
    }
}
