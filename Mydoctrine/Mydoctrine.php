<?php
namespace Mydoctrine;
class Mydoctrine {

    function theTest() {
        return true;
    }

}



/*
use Doctrine\MongoDB\Connection;
use Doctrine\ODM\MongoDB\Configuration;
use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver;

if (!file_exists($file = '../vendor/autoload.php')) {
    throw new RuntimeException('Install dependencies to run this script.');
}


$loader = require_once $file;
$loader->add('Documents', __DIR__);

$connection = new Connection();

$config = new Configuration();
$config->setProxyDir(__DIR__ . '/Proxies');
$config->setProxyNamespace('Proxies');
$config->setHydratorDir(__DIR__ . '/Hydrators');
$config->setHydratorNamespace('Hydrators');
$config->setDefaultDB('laravelframe');


//var_dump($config);
// $config->setLoggerCallable(function(array $log) { print_r($log); });
// $config->setMetadataCacheImpl(new Doctrine\Common\Cache\ApcCache());
$config->setMetadataDriverImpl(AnnotationDriver::create(__DIR__ . '/Documents'));

AnnotationDriver::registerAnnotationClasses();

$dm = DocumentManager::create($connection, $config);


//var_dump($dm);
*/