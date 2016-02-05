<?php

require_once('../vendor/autoload.php');
require_once('../Config/routing.php');

use Core\Router;

$uri = $_SERVER['REQUEST_URI'];
$dir = __DIR__;
$path = substr($dir, strlen($_SERVER['DOCUMENT_ROOT']));
$route = substr($uri, strlen($path));

$router = new Router();
$response = $router->run($route);


//$loader = new Twig_Loader_Filesystem('../src/templates');
//$twig = new Twig_Environment($loader, array(
//    'cache' => '../vendor/twig/twig/lib/Twig/Cache',
//));
//
//echo $twig->render('index.html.twig');

