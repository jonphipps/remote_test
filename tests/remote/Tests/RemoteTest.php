<?php

  use Symfony\Component\HttpFoundation\Request;
  use Symfony\Component\HttpFoundation\Response;
  use Guzzle\Service\Client;

  class RemoteTest extends \PHPUnit_Framework_TestCase
  {
    /* @var $guzzleClient \Guzzle\Service\Client */
    private $guzzleClient;
    /* @var $symfonyRequest \Symfony\Component\HttpFoundation\Request */
    private $symfonyRequest;
    /* @var $guzzleResponse \Guzzle\Http\Message\Response */
    private $guzzleResponse;

/*    public function __construct()
    {
      $testSite = 'http://rdvocab';
      xdebug_break();
      $this->symfonyRequest = Request::create($testSite);
      $this->guzzleClient = new Client($testSite);

      $this->guzzleResponse = $this->guzzleClient->get('/resource.xml')->send();

    }*/

    protected  function setUp()
    {
      xdebug_break();
      $testSite = 'http://rdvocab';
      $this->symfonyRequest = Request::create($testSite);
      $this->guzzleClient = new Client($testSite);
      $this->guzzleResponse = $this->guzzleClient->get('/resource.xml')->send();

    }

    public function testResponse()
    {
      $_GET['name'] = 'Fabien';
      xdebug_break();

      $this->assertEquals('http://rdvocab', $this->guzzleClient->getBaseUrl());
    }
  }
