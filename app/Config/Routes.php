<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/LoginController', 'LoginController::index');
$routes->get('/LoginController', 'LoginController::show');