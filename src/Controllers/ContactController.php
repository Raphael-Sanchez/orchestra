<?php

namespace Controllers;

class ContactController extends \Core\Controller
{
    public function contact()
    {
        echo $this->render('contact');
    }
}