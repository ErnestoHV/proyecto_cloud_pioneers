<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Controller\AdminModel;

class AdminController extends BaseController
{
    public function index()
    {
        echo 'Route= /AdminController::index || Controller=AdminController';
        echo "<h1>AdminController</h1>";
       
        return view('administrador/vista_administrador');
    }

    public function admin_cruds_clientes()
    {
        echo 'Route= /AdminController::admin_cruds_clientes || Controller=AdminController';
        echo "<h1>AdminController</h1>";
        return view('administrador/vista_administrador_cruds_clientes');
    }

    public function admin_cruds_usuarios()
    {
        echo 'Route= /AdminController::admin_cruds_usuarios || Controller=AdminController';
        echo "<h1>AdminController</h1>";
        return view('administrador/vista_administrador_cruds_usuarios');
    }

    public function admin_procesos()
    {
        echo 'Route= /AdminController::admin_procesos || Controller=AdminController';
        echo "<h1>AdminController</h1>";
        return view('administrador/vista_administrador_procesos');
    }

}