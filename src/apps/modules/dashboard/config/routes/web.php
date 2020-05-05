<?php

$namespace = 'Its\Example\Dashboard\Presentation\Web\Controller';

// Create the router
// Define a router

$router->add(
    '/',
    [
        'namespace' => 'Its\Example\Dashboard\Presentation\Web\Controller',
        'module' => 'dashboard',
        'controller' => 'index',
        'action'     => 'index',
    ]
);

$router->add('/register', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'register',
    'action' => 'index'
]);

$router->add(
    '/submit',
    [
        'namespace' => 'Its\Example\Dashboard\Presentation\Web\Controller',
        'module' => 'dashboard',
        'controller' => 'index',
        'action'     => 'loginSubmit',
    ]
);



