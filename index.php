<?php

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Doctrine\DBAL\Configuration;
use Doctrine\DBAL\DriverManager;

//handle request
$request = Request::createFromGlobals();


$config = new Configuration();
//connection to db
$connectionParams = array(
    'dbname' => 'db',
    'user' => 'root',
    'password' => 'usbw',
    'host' => 'localhost',
    'port' => 3307,
    'driver' => 'pdo_mysql',
);
$conn = DriverManager::getConnection($connectionParams, $config);

function path($path = '')
{
	global $request;
	return $request->server->get('SCRIPT_NAME') . $path;
}

function url($path = '')
{
	global $request;
	return $request->server->getSchemeAndHttpHost() . path($path);
}

switch ($request->server->get('PATH_INFO')) {
	case '':
		if ($request->query->getInt('id')) {
   			require_once 'post.php';
		} else {
    		require_once 'posts.php';
		}
		break;	

	case '/admin/post':
		if ($request->query->getInt('id')) {
   			require_once 'admin-post.php';
		} else {
			require_once 'admin-posts.php';
		}
		break;


	case '/admin/post/new':
		require_once 'admin-post.php';
		break;

	case '/admin/post/delete':
		$conn->delete('posts', [
			'id' => $request->query->getInt('id'),
		]);
		header('Location:' . path('/admin/post'));
		exit;
		break;	
	default: 
		header("HTTP/1.0 404 Not Found");
		require '404.php';	
}
