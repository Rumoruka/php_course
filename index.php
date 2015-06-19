<?php

require __DIR__ . '/vendor/autoload.php';

$config = new \Doctrine\DBAL\Configuration();
//..
$connectionParams = array(
    'dbname' => 'db',
    'user' => 'root',
    'password' => 'usbw',
    'host' => 'localhost',
    'port' => 3307,
    'driver' => 'pdo_mysql',
);
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);

if (isset($_GET['id'])){
    
    require_once 'post.php';

} else {

    require_once 'posts.php';
}


