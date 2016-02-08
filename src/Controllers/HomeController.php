<?php

namespace Controllers;

class HomeController extends \Core\Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function home()
  {
    echo $this->render('home');

//    TEST PERSIST ORM
//    $Post = new \Entity\Post();
//    $Post->setTitle('Une Histoire de Dev');
//    $Post->setContent('Une histoire de dev est le ...');
//    $this->manager->persist($Post);
  }
}
