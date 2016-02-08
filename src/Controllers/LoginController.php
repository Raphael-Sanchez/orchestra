<?php

namespace Controllers;

class LoginController extends \Core\Controller
{
    public function login()
    {
        echo $this->render('login');
    }
}