<?php
 
// remote_test/autoload.php
 
require_once __DIR__.'/vendor/symfony/src/Symfony/Component/ClassLoader/UniversalClassLoader.php';
 
use Symfony\Component\ClassLoader\UniversalClassLoader;
 
$loader = new UniversalClassLoader();
$loader->registerNamespaces(array(
    'Symfony'          => __DIR__.'/vendor/symfony/src',
    'Doctrine\\Common' => __DIR__.'/vendor/doctrine-common/lib',
    'Doctrine\\DBAL'   => __DIR__.'/vendor/doctrine-dbal/lib',
    'Doctrine'         => __DIR__.'/vendor/doctrine/lib',
    'Monolog'          => __DIR__.'/vendor/monolog/src',
    'Metadata'         => __DIR__.'/vendor/metadata/src',
));
