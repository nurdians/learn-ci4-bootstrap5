<?php

use CodeIgniter\Router\RouteCollection;

$routes->setAutoRoute(true);

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes->get('post', 'Post::index');
