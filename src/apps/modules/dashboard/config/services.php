<?php

use Phalcon\Mvc\View;
use Its\Example\Dashboard\Core\Application\Service\FindUserById\FindUserByIdService;
use Its\Example\Dashboard\Infrastructure\Persistence\SqlServerUserRepository;
use Phalcon\Assets\Asset\Css;
use Phalcon\Image\ImageFactory;

$di['view'] = function () {
    $view = new View();
    $view->setViewsDir(__DIR__ . '/../Presentation/Web/views/');

    $view->registerEngines(
        [
            ".volt" => "voltService",
            
        ]
        );

    return $view;
};

$di['db'] = function () use ($di) {
    $config = $di->get('config');

    $dbAdapter = $config->database->adapter;

    return new \Phalcon\Db\Adapter\Pdo\Sqlsrv([
        'host' => $config->database->host,
        'username' => $config->database->username,
        'password' => $config->database->password,
        'dbname' => $config->database->dbname,
        'port' => $config->database->port
    ]);
};

$di->set('sqlServerUserRepository', function () use ($di){
    return new SqlServerUserRepository($di->get('db'));
});

$di->setShared('findUserByIdService', function () use ($di){
    return new FindUserByIdService($di->get('sqlServerUserRepository'));
});

$di->set('assets', function() use ($di){
    $assets = new \Phalcon\Assets\Manager();
    $assets
        ->collection('header')
        ->addCss('assets/demo.css')    
        ->addCss('assets/form-register.css');
    return $assets;
});


$di->set('imageFactory', function() use ($di){
    $factory = new ImageFactory();
    return $factory;
});




