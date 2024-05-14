<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Product::index');
$routes->get('/recommendation', 'Product::recommendation');
$routes->get('/collection', 'Product::collection');
