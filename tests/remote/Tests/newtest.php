<?php

  require_once '/Users/jphipps/sites/remote_test/autoload.php';

  use Symfony\Component\HttpFoundation\Request;
  use Symfony\Component\HttpFoundation\Response;


  //  use Guzzle\Service\Client;

  xdebug_break();

  $request = Request::create('/?http://rdvocab.info', 'GET');

$client = new Client('http://rdvocab/');
$response = $client->get('/resource.xml')->send();

  class IndexTest extends \PHPUnit_Framework_TestCase
  {
    public function testHello()
    {
      $_GET['name'] = 'Fabien';

      ob_start();
      include 'index.php';
      $content = ob_get_clean();

      $this->assertEquals('Hello Fabien', $content);
    }
  }
