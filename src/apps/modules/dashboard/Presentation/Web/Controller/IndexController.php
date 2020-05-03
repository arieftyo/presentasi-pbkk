<?php

namespace Its\Example\Dashboard\Presentation\Web\Controller;

use Phalcon\Mvc\Controller;
use Phalcon\Image\Adapter\Gd;

class IndexController extends Controller
{
    
    public function indexAction()
    {
        // $this->assets
        //     ->collection('header')
        //     ->addCss('assets/demo.css')
        //     ->addCss('assets/form-register.css');
        // $this->view->pick('login');
        $image = new Gd('assets/logoits.jpg');
        $image->blur(50);
        $image->save();

    }

}