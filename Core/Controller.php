<?php

namespace Core;

use ORM\Connection;
use ORM\Entity\Manager;
use Symfony\Component\Yaml\Yaml;

require_once('../vendor/autoload.php');
require_once('../vendor/twig/twig/lib/Twig/Autoloader.php');

class Controller
{
    protected $manager;
    public function __construct()
    {
        $data = $this->getDbConfig();
        new Connection($data['host'], $data['database'], $data['username'], $data['password']);
        $this->manager = new \ORM\Entity\Manager();
    }

    public function render($name)
    {
        $loader = new \Twig_Loader_Filesystem('../src/templates');
        $twig = new \Twig_Environment($loader, array('auto_reload' => true));
        return $twig->render($name . '.html.twig');
    }

    public function getDbConfig()
    {
        $data = Yaml::parse(file_get_contents(__DIR__ . '/../Config/database.yml'));
        return $data;
    }
}
