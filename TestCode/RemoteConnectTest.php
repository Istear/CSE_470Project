<?php

require_once('RemoteConnect.php');

class RemoteConnectTest extends PHPUnit_Framework_TestCase
{
  public function setUp(){ }
  public function tearDown(){ }

  public function testConnectionIsValid()
  {
    // testing server
    $connObj = new RemoteConnect();
    $serverName = 'google.com';
    $this->assertTrue($connObj->connectToServer($serverName) !== false);
  }
}
?>