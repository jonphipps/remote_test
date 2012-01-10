<?php
 
// remote_test/autoload.php
 
require_once __DIR__.'/vendor/symfony/src/Symfony/Component/ClassLoader/UniversalClassLoader.php';

use Symfony\Component\ClassLoader\UniversalClassLoader;

  $loader = new UniversalClassLoader();
  $loader->register();
  $loader->registerNamespace('Symfony\\Component\\HttpFoundation', __DIR__.'/vendor/symfony/http-foundation');
