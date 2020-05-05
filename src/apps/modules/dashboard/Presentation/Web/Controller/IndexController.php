<?php

namespace Its\Example\Dashboard\Presentation\Web\Controller;

use Phalcon\Mvc\Controller;
use Phalcon\Assets\Exception;
use Phalcon\Assets\Asset;
use Phalcon\Assets\Asset\Css;
use Phalcon\Assets\Inline;

use Phalcon\Image\Adapter\Gd;
use Phalcon\Image\Enum;

class IndexController extends Controller
{
    
    public function indexAction()
    {
        //1 add Asset
        // $asset = new Asset('css',
        //     'assets/form-register.css'
        // );
        // $newAsset = new Asset('css',
        //     'assets/demo.css'
        // );
        // $this->assets->addAsset($asset);
        // $this->assets->addAsset($newAsset);

       
        //2 inline
        // $asset ='.form-register { background-color: #3CBC8D; }';
        // $this->assets->addInlineCss($asset);

       
        //3 addcss
        // $this->assets
        //     ->addCss('assets/demo.css')
        //     ->addCss('assets/form-register.css');


        //4 add asset with object css
        // $css1 = new Css('assets/demo.css');
        // $css2 = new Css('assets/form-register.css');
        // $this->assets->addAsset($css1);
        // $this->assets->addAssetByType('css', $css2);

        //5 collection
        // $headerCollection = $this->assets->collection('headerCss');
        // $headerCollection->addCss('assets/demo.css');
        // $headerCollection->addCss('assets/form-register.css');

        //
        // $this->assets
        //     ->addCss('assets/demo.css')
        //     ->addCss('assets/form-register.css');



        // $this->assets
        //     ->collection('header')
        //     ->addCss('assets/demo.css')
        //     ->addCss('assets/form-register.css');
        

        //image

        // menggunakan Gd
        $image = new Gd('logoits.jpg');

        // $image->resize(300, 200, Enum::HEIGHT);
        // $image->save('resize-height-image.jpg');

        // var_dump($image->getHeight());
        // var_dump($image->getWidth());
        // die();

        // $image->pixelate(50);
        // $image->save('pixelated-image.jpg');

      
        // $image->text(
        //     'Phalcon Framework',
        //     100,
        //     10,
        //     75,
        //     '000033',
        //     50,
        // );
        
        // $image->save('text-image.jpg');

        // menggunakan image factory

        $image = $this->imageFactory->newInstance('gd', 'logoits.jpg');
        $image->blur(50);
        $image->save('blur-image.jpg');

        // var_dump($this->asset);
        $this->view->pick('login');
        

    }

    public function loginSubmitAction(){
        $user['email'] = $this->request->getPost('email');
        $user['password'] = $this->request->getPost('password');
        if($user['email'] == null || $user['password'] == null){
            
            // flash error
            // $this->flash->error("invalid");

            // flashsession error
            // $this->flashSession->error("Invalid Username / Password");
            // return $this->response->redirect('/');

            //flashsession warning
            // $this->flashSession->warning("Invalid Username / Password");
            // return $this->response->redirect('/');

            //implicit false
            //  echo $this->flash
            //  ->setImplicitFlush(false) 
            //     ->error('Error Message') // 'Error Message'

            //auto escape
//             $this->flash
//             ->setAutoescape(false)
//             ->error('<h1>Error</h1>')
// ;
;



            

			
        }
        
         
    }

}