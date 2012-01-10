<?php

  require_once __DIR__ . '/../vendor/.composer/autoload.php';

  use Symfony\Component\HttpFoundation\Request;
  use Symfony\Component\HttpFoundation\Response;

  $request = Request::create('http://rdvocab');

