<?php
use
Doctrine\Common\ClassLoader,
Doctrine\ORM\Configuration,
Doctrine\ORM\EntityManager,
Doctrine\Common\Cache\ApcCache;


require_once "vendor/autoload.php";


// Set up Entities class loading.
$classLoader = new ClassLoader('po', __DIR__);
$classLoader->register();

// Set up caches
$config = new Configuration;
//$cache = new ApcCache;
//$config->setMetadataCacheImpl($cache);
$driverImpl = $config->newDefaultAnnotationDriver(array(__DIR__."/po"));
$config->setMetadataDriverImpl($driverImpl);
//$config->setQueryCacheImpl($cache);

// Proxy configuration
$config->setProxyDir(__DIR__ . '/Proxies');
$config->setProxyNamespace('Proxies');
//$config->setMetadataCacheImpl(new \Doctrine\Common\Cache\ArrayCache);

// Database connection information
$connectionOptions = array( 
'dbname' => 'po', 
'user' => 'postgres', 
'password' => '123456', 
'host' => 'localhost', 
'driver' => 'pdo_pgsql', 
); 

// Create EntityManager
$em = EntityManager::create($connectionOptions, $config);

//echo 'Hello World! gy!2' . PHP_EOL;


?>



