<?php

require_once('../vendor/autoload.php');
require_once('../Config/routing.php');

use Core\Router;
use Core\Controller;

$uri = $_SERVER['REQUEST_URI'];
$dir = __DIR__;
$path = substr($dir, strlen($_SERVER['DOCUMENT_ROOT']));
$route = substr($uri, strlen($path));

$router = new Router();
$response = $router->run($route);

?>
