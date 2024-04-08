<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->set404Override(function()
    {
        $override404 = 'App\Errors::show404';
    });

//Ruta para direccionar al usuario a la página por defecto de CodeIgniter4
$routes->get('/', 'LoginController::index');


//Rutas para direccionar al usuario a la vista del Login
// $routes->get('/LoginController', 'LoginController::index');
// $routes->get('/LoginController', 'LoginController::show');
$routes->match(['get', 'post'], 'LoginController/loginAuth', 'LoginController::loginAuth');
$routes->get('salir', 'LoginController::logout');
$routes->get('login', 'LoginController::index');



//Rutas para direccionar al usuario a la vista de Administrador
$routes->get('/AdminController', 'AdminController::index');