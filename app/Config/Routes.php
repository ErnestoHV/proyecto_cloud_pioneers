<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


//Rutas para tener acceso al sistema (Login)
$routes->match(['get', 'post'], 'SigninController/loginAuth', 'SigninController::loginAuth');
$routes->get('usuarios', 'Usuarios::index');
$routes->get('salir', 'SigninController::logout');
$routes->get('login', 'SigninController::index');