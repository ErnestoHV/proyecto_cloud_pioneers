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

///////////////////////////////////////////////////////////////
//////////                  LogIn                    //////////
///////////////////////////////////////////////////////////////

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

//////////////////////////
///VISTA ADMIN: CLIENTE///
//////////////////////////

///Rutas para direccionar al usuario a la vista de CRUDS de clientes con un registro activo (en la BDD) dentro de la vista Administrador
$routes->get('/administrador/vista_administrador_cruds_clientes', 'AdminController::admin_cruds_clientes');
//Ruta para direccionar al usuario a la vista de clientes con un registro inactivo (en la BDD) dentro de la vista de Administrador
$routes->get('/administrador/vista_administrador_clientes_inactivos', 'AdminController::admin_clientes_inactivos');
//Ruta para direccionar al usuario a la vista de clientes con todos los registros (activos e inactivos) dentro de la vista de Administrador
$routes->get('/administrador/vista_administrador_clientes_todos', 'AdminController::admin_clientes_todos');


////////////////////////
///Cliente: C R U D S///
////////////////////////

//Ruta para el formulario alta de clientes
$routes->get('/administrador/vista_administrador_alta_clientes','AdminController::admin_cruds_clientes_alta');
//Ruta para la alta de clientes
$routes->post('/administrador/vista_administrador_alta_clientes','AdminController::admin_cruds_clientes_alta_new');
//Ruta para el borrado de clientes
$routes->get('/administrador/vista_administrador_cruds_clientes/borrar(:num)','AdminController::admin_cruds_clientes_baja/$1');
//Ruta para la edición de clientes
$routes->post('vista_administrador_modificar_clientes/(:any)', 'AdminController::admin_cruds_clientes_modificacion/$1');


///////////////////////////
///VISTA ADMIN: USUARIOS///
///////////////////////////

///Rutas para direccionar al usuario a la vista de CRUDS de usuarios dentro de la vista Administrador
$routes->get('/administrador/vista_administrador_cruds_usuarios', 'AdminController::admin_cruds_usuarios');


////////////////////////////
///VISTA ADMIN: DOCUMENTO///
////////////////////////////

///Rutas para direccionar al usuario a la vista de CRUDS de documentos dentro de la vista Administrador
$routes->get('/administrador/vista_administrador_cruds_documentos', 'AdminController::admin_cruds_documentos');

//////////////////////////
///Documento: C R U D S///
//////////////////////////
//Ruta para el borrado de documentos
$routes->get('/administrador/vista_administrador_cruds_documentos/borrar(:num)','AdminController::admin_cruds_documentos_baja/$1');


/////////////////////////
///VISTA ADMIN: ENSAYO///
/////////////////////////

///Rutas para direccionar al usuario a la vista de CRUDS de ensayos dentro de la vista Administrador
$routes->get('/administrador/vista_administrador_cruds_ensayos', 'AdminController::admin_cruds_ensayos');



/////////////////////////
////Ensayo: C R U D S////
/////////////////////////

//Ruta para el alta de ensayos
$routes->get('/administrador/vista_administrador_alta_ensayos','AdminController::admin_cruds_ensayos_alta');
//Ruta para el borrado de ensayos
//Ruta para la edición de ensayos



///////////////////////////
///VISTA ADMIN: SERVICIO///
///////////////////////////
///Rutas para direccionar al usuario a la vista de servicios de Administrador
$routes->get('/administrador/vista_administrador_servicios', 'AdminController::admin_servicios');


////////////////////////////
///VISTA ADMIN: SOLICITUD///
////////////////////////////
///Rutas para direccionar al usuario a la vista de solicitudes de Administrador
$routes->get('/administrador/vista_administrador_solicitudes', 'AdminController::admin_solicitudes');

/////////////
//Búsquedas//
/////////////

//Búsqueda de cliente por RFC



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
$routes->post('subir_solicitud', 'Formulario_solicitudController::subir_solicitud');
//Ruta para dirigir a la solicitud ya enviada
$routes->get('formulario_solicitud_servicio/formulario_solicitud_servicio/exito', 'Formulario_solicitudController::index');