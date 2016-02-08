<?php

namespace Core;

use ORM\Connection;
use ORM\Entity\Manager;

require_once('../vendor/autoload.php');
require_once('../vendor/twig/twig/lib/Twig/Autoloader.php');

class Controller
{

    public function __construct()
    {
        $connexion = new \ORM\Connection(host, database, username, password);
    }

    public function render($name)
    {
        $loader = new \Twig_Loader_Filesystem('../src/templates');
        $twig = new \Twig_Environment($loader, array('auto_reload' => true));
        return $twig->render($name . '.html.twig');
    }
}
