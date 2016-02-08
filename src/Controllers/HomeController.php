<?php

namespace Controllers;

class HomeController extends \Core\Controller
{
  public function home()
  {
    // Echo the templates of HomeController
    echo $this->render('home');
  }
}
