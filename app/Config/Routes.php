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
// $routes->get('/', 'Home::index');


//Ruta para direccionar al usuario a la vista por defecto establecida: Login
$routes->get('/', 'LoginController::index');


//Rutas para direccionar al usuario a la vista del Login
$routes->match(['get', 'post'], 'LoginController/logIn', 'LoginController::logIn');
//Rutas para direccionar al usuario a la vista del Login una vez que cerró la sesión
$routes->get('LoginController/logOut', 'LoginController::logOut');
$routes->get('login', 'LoginController::index');

///////////////////////////////////////////////////////////////
//////////                  Admin                    //////////
///////////////////////////////////////////////////////////////
//Rutas para direccionar al usuario a la vista de Administrador
$routes->get('/administrador/vista_administrador', 'AdminController::index');
///Rutas para direccionar al usuario a la vista de CRUDS de clientes dentro de la vista Administrador
$routes->get('/administrador/vista_administrador_cruds_clientes', 'AdminController::admin_cruds_clientes');
///Rutas para direccionar al usuario a la vista de CRUDS de usuarios dentro de la vista Administrador
$routes->get('/administrador/vista_administrador_cruds_usuarios', 'AdminController::admin_cruds_usuarios');
///Rutas para direccionar al usuario a la vista de CRUDS de documentos dentro de la vista Administrador
$routes->get('/administrador/vista_administrador_cruds_documentos', 'AdminController::admin_cruds_documentos');
///Rutas para direccionar al usuario a la vista de CRUDS de ensayos dentro de la vista Administrador
$routes->get('/administrador/vista_administrador_cruds_ensayos', 'AdminController::admin_cruds_ensayos');
///Rutas para direccionar al usuario a la vista de servicios de Administrador
$routes->get('/administrador/vista_administrador_servicios', 'AdminController::admin_servicios');
///Rutas para direccionar al usuario a la vista de solicitudes de Administrador
$routes->get('/administrador/vista_administrador_solicitudes', 'AdminController::admin_solicitudes');



///////////////////////////////////////////////////////////////
//////////          Responsable de ensayo            //////////
///////////////////////////////////////////////////////////////
//Rutas para direccionar al usuario a la vista de Responsable de ensayos
$routes->get('/responsable_ensayos/vista_responsable_ensayos', 'Responsable_ensayoController::index');


///////////////////////////////////////////////////////////////
//////////                Supervisor                 //////////
///////////////////////////////////////////////////////////////
//Rutas para direccionar al usuario a la vista de Supervisor
$routes->get('/supervisor/vista_supervisor','SupervisorController::index');


///////////////////////////////////////////////////////////////
//////////          Técnico de laboratorio           //////////
///////////////////////////////////////////////////////////////
//Ruta para direccionar al usuario a la vista de Técnico de laboratorio
$routes->get('/tecnico_laboratorio/vista_tecnico_laboratorio','Tecnico_laboratorioController::index');


///////////////////////////////////////////////////////////////
//////////                Formulario                 //////////
///////////////////////////////////////////////////////////////
//Ruta para dirigir al formulario de solicitud de servicio 
$routes->get('formulario_solicitud_servicio/formulario_solicitud_servicio','Formulario_solicitudController::index');
//Ruta para cargar a BDD el contenido del formulario
$routes->post('subir_solicitud', 'Formulario_solicitudController::guardar_solicitud');
//Ruta para dirigir a la solicitud ya enviada
$routes->get('formulario_solicitud_servicio/formulario_solicitud_servicio/exito', 'Formulario_solicitudController::index');