<?php

namespace Controllers;

class ErrorController extends \Core\Controller
{
    public function error()
    {
        echo $this->render('404');
    }
}
