<?php

require_once('../autoloader.php');
require_once('../Config/Config.php');
require_once('../Core/Router.php');

$uri = $_SERVER['REQUEST_URI'];
$dir = __DIR__;
$path = substr($dir, strlen($_SERVER['DOCUMENT_ROOT']));
$route = substr($uri, strlen($path));

$router = new Router();
$response = $router->run($route);

echo $response;