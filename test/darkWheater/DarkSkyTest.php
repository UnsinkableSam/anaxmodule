<?php

namespace Anax\darkSkyApi;

use Anax\DI\DIFactoryConfig;
use PHPUnit\Framework\TestCase;

/**
 * Test the SampleJsonController.
 */
class DarkSkyTest extends TestCase
{


    // Create the di container.
    protected $di;
    protected $controller;

    protected function setUp()
    {
        global $di;

        // Setup di
        $this->di = new DIFactoryConfig();
        $this->di->loadServices(ANAX_INSTALL_PATH . "/config/di");

        // View helpers uses the global $di so it needs its value
        $di = $this->di;

        // Setup the controller
        $this->class = new DarkSky();

        //$this->controller->initialize();
    }



    public function testSeven()
    {

        $time = "2016-09-02T15:30:30";
        $res = $this->class->wheatherSevenActionGet(30, $time);
        $testObj = gettype($res);
        print_r($testObj);
        print_r(gettype($testObj));
        $this->assertContains("array", $testObj);
    }


    public function testwheatherThirty()
    {
        $coordinates = (object) ["latitude" => "56.2"];
        $coordinates->longitude = "15.5167";
        $res = [];
        array_push($res, $coordinates);
        $time = "2016-09-02T15:30:30";
        $dates = $this->class->wheatherSevenActionGet(30, $time);
        $accessKey = $darkSkyKey = $this->di->get("apikeyDarkSky");

        $response = $this->class->wheatherThirtyActionGet($res, $dates, $accessKey);
        $testObj = gettype($response);
        $this->assertContains("array", $testObj);
    }



    public function testwheatherJson()
    {
        $coordinates = (object) ["latitude" => "56.2"];
        $coordinates->longitude = "15.5167";
        $res = [];
        array_push($res, $coordinates);
        $time = "2016-09-02T15:30:30";
        $dates = $this->class->wheatherSevenActionGet(30, $time);
        $accessKey = $darkSkyKey = $this->di->get("apikeyDarkSky");

        $response = $this->class->wheatherActionGet($res, $accessKey);
        $testObj = gettype($response);
        $this->assertContains("array", $testObj);
    }




    public function testStreet()
    {
        $response = $this->class->streetActionGet("56.2", "15.5167");
        $testObj = gettype($response);
        $this->assertContains("", $testObj);
    }
}
