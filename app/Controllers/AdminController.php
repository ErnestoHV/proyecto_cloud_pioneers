<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\ServicioModel;

class AdminController extends BaseController
{
    public function index()
    {
        // echo 'Route= /AdminController::index || Controller=AdminController';
        // echo "<h1>AdminController</h1>";
       
        return view('administrador/vista_administrador');
    }

    public function admin_cruds_clientes()
    {
        // echo 'Route= /AdminController::admin_cruds_clientes || Controller=AdminController';
        // echo "<h1>AdminController</h1>";
        return view('administrador/vista_administrador_cruds_clientes');
    }

    public function admin_cruds_usuarios()
    {
        // $db = \Config\Database::connect();
        // $query = $db->query("SELECT id_usuario,id_rol,contrasena_usuario,correo_electronico,nombre_usuario,apellidos_usuario,fecha_creacion_usuario,fecha_modificacion_usuario from usuario");

        // $resultado_usuarios = $query->getResultArray();

        
        $UserModel = new UserModel();
        $resultado_usuarios = $UserModel->findAll(); 
        
        $datos_usuarios =['usuarios'=>$resultado_usuarios];
        // echo 'Route= /AdminController::admin_cruds_usuarios || Controller=AdminController';
        // echo "<h1>AdminController</h1>";
        return view('administrador/vista_administrador_cruds_usuarios',$datos_usuarios);
    }

    public function admin_servicios()
    {
        // $db = \Config\Database::connect();
        // $query = $db->query("SELECT * from servicio");

        // $resultado_servicios = $query->getResultArray();

        // $datos_servicios =['servicios'=>$resultado_servicios];


        // echo 'Route= /AdminController::admin_servicios || Controller=AdminController';
        // echo "<h1>AdminController</h1>";

        $ServicioModel = new ServicioModel();
        $resultado_servicios = $ServicioModel->findAll(); 
        
        $datos_servicios =['servicios'=>$resultado_servicios];

        return view('administrador/vista_administrador_servicios',$datos_servicios);
    }

}