<?php

$namespace = 'Its\Example\Dashboard\Presentation\Web\Controller';

// Create the router
// Define a router

$router->add(
    '/dashboard/register',
    [
        'namespace' => 'Its\Example\Dashboard\Presentation\Web\Controller',
        'module' => 'dashboard',
        'controller' => 'register',
        'action'     => 'index',
    ]
);

$router->add('/dashboard', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'index',
    'action' => 'index'
]);



