<?php

namespace Core;

use Controllers\LoginController;
use Controllers\HomeController;
use Controllers\ErrorController;

class Router
{
  public function run($route)
  {
    global $routes;

    if (!empty($routes[$route]))
    {
      $parts = explode(':', $routes[$route]);
      $controller_name = 'Controllers\\' . $parts[0] . 'Controller';
      var_dump($controller_name);

      $controller = new $controller_name;

      return $controller->$parts[1]();
    }
    else {
//      header("HTTP/1.0 404 Not Found");
      $error = new ErrorController();
      $error->error();
    }

  }
}