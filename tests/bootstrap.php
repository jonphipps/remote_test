<?php

  putenv('PATH=~/bin:/usr/local/bin:/usr/local/mysql/bin:$PATH');
  putenv('PHPRC=/usr/local/php5/lib ');
  putenv('PHP_INI_SCAN_DIR=/usr/local/php5/php.d');

  require_once __DIR__ . '/../vendor/.composer/autoload.php';

/*
  use Symfony\Component\HttpFoundation\Request;
  use Symfony\Component\HttpFoundation\Response;
  use Guzzle\Service\Client;

  $symfonyRequest = Request::create('http://rdvocab');
  $guzzleClient = new Client('http://rdvocab');
*/
