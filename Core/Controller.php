<?php

namespace Core;

require_once('../vendor/autoload.php');
require_once('../vendor/twig/twig/lib/Twig/Autoloader.php');

class Controller
{
    public function render($name)
    {
        $loader = new \Twig_Loader_Filesystem('../src/templates');
        $twig = new \Twig_Environment($loader, array(
//            'cache' => '../vendor/twig/twig/lib/Twig/Cache',
        ));
        return $twig->render($name . '.html.twig');
    }
}
