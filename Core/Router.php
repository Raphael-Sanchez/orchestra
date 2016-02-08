<?php

namespace Core;

use Logger\Logger;
use Controllers\ErrorController;

class Router
{
  public function run($route)
  {
    global $routes;

    Logger::accessLog($_SERVER);

    if (!empty($routes[$route]))
    {
      $parts = explode(':', $routes[$route]);
      $controller_name = 'Controllers\\' . $parts[0] . 'Controller';
      $controller = new $controller_name;
      return $controller->$parts[1]();
    }
    else {
      Logger::errorLog($_SERVER);
      $error = new ErrorController();
      $error->error();
    }
  }
}