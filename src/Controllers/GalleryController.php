<?php

namespace Controllers;

class GalleryController extends \Core\Controller
{
    public function gallery()
    {
        echo $this->render('gallery');
    }
}