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

?>

<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--  <head>-->
<!--    <meta charset="utf-8">-->
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--    <title>Test Orchestra</title>-->
<!--    <!-- Bootstrap core CSS -->-->
<!--    <link href="../src/assets/dist/css/bootstrap.min.css" rel="stylesheet">-->
<!--    <!-- Custom styles for this template -->-->
<!--    <link href="../src/assets/dist/css/starter-template.css" rel="stylesheet">-->
<!--  </head>-->
<!--  <body>-->
<!--    <nav class="navbar navbar-inverse navbar-fixed-top">-->
<!--      <div class="container">-->
<!--        <div class="navbar-header">-->
<!--          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">-->
<!--            <span class="sr-only">Toggle navigation</span>-->
<!--            <span class="icon-bar"></span>-->
<!--            <span class="icon-bar"></span>-->
<!--            <span class="icon-bar"></span>-->
<!--          </button>-->
<!--          <a class="navbar-brand" href="#">Orchestra</a>-->
<!--        </div>-->
<!--        <div id="navbar" class="collapse navbar-collapse">-->
<!--          <ul class="nav navbar-nav">-->
<!--            <li class="active"><a href="#">Home</a></li>-->
<!--            <li><a href="#gallery">Gallery</a></li>-->
<!--            <li><a href="#contact">Contact</a></li>-->
<!--          </ul>-->
<!--        </div><!--/.nav-collapse -->-->
<!--      </div>-->
<!--    </nav>-->
<!--    <div class="container">-->
<!--<!--      <div class="starter-template">-->-->
<!--<!--        <h1>Bootstrap starter template</h1>-->-->
<!--<!--        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>-->-->
<!--<!--      </div>-->-->
<!--    </div><!-- /.container -->-->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
<!--    <script src="../assets/dist/js/bootstrap.min.js"></script>-->
<!--  </body>-->
<!--</html>-->
