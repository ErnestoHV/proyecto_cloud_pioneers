<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\ServicioModel;
use App\Models\SolicitudModel;
use App\Models\RolModel;
use App\Models\DocumentoModel;
use App\Models\EstadoModel;
use App\Models\ClienteModel;
use App\Models\EnsayoModel;

class AdminController extends BaseController
{
    public function index()
    {
        // echo 'Route= /AdminController::index || Controller=AdminController';
        // echo "<h1>AdminController</h1>";
        helper(['form']);
        return view('administrador/vista_administrador');
    }

    /////////////////////////////
    ///Funciones CRUD clientes///
    /////////////////////////////

    public function admin_cruds_clientes()
    {
        $ClienteModel = new ClienteModel();
        $resultado_clientes = $ClienteModel->findAll();
        
        
        $datos_clientes = ['clientes'=>$resultado_clientes];
        return view('administrador/vista_administrador_cruds_clientes',$datos_clientes);
        
    }

    public function admin_cruds_clientes_borrar($id)
    {
        $ClienteModel = new ClienteModel();
        $borrado_clientes ->where('id_cliente', $id)->delete($id);

        return redirect()->to(base_url('vista_administrador_cruds_clientes'));
    }
    /////////////////////////////
    ///Funciones CRUD usuarios///
    /////////////////////////////
    public function admin_cruds_usuarios()
    {
        
        $UserModel = new UserModel();
        $RolModel = new RolModel();
        $resultado_usuarios = $UserModel->findAll(); 
        $resultado_roles = $RolModel->findAll();

        $datos_usuarios =['usuarios'=>$resultado_usuarios,'roles'=>$resultado_roles ];
        return view('administrador/vista_administrador_cruds_usuarios',$datos_usuarios);
    }

    public function admin_servicios()
    {

        $ServicioModel = new ServicioModel();
        $resultado_servicios = $ServicioModel->findAll(); 
        
        $datos_servicios =['servicios'=>$resultado_servicios];

        return view('administrador/vista_administrador_servicios',$datos_servicios);
    }

    public function admin_solicitudes()
    {
        $SolicitudModel = new SolicitudModel();
        $resultado_solicitudes = $SolicitudModel->findAll(); 
        
        $datos_solicitudes =['solicitudes'=>$resultado_solicitudes];

        return view('administrador/vista_administrador_solicitudes',$datos_solicitudes);
    }

    public function admin_cruds_documentos()
    {
        $DocumentoModel = new DocumentoModel();
        $EstadoModel = new EstadoModel();
        $resultado_documentos = $DocumentoModel->findAll(); 
        $resultado_estados = $EstadoModel->findAll();
        
        $datos_documentos =['documentos'=>$resultado_documentos,'estados'=>$resultado_estados];

        return view('administrador/vista_administrador_cruds_documentos',$datos_documentos);
    }

    public function admin_cruds_ensayos()
    {
        $EnsayoModel = new EnsayoModel();
        $resultado_ensayos = $EnsayoModel->findAll(); 
        
        $datos_ensayos =['ensayos'=>$resultado_ensayos];

        return view('administrador/vista_administrador_cruds_ensayos',$datos_ensayos);
    }

    ///////////////
    ///Búsquedas///
    ///////////////

    public function busqueda_clientes_rfc($rfc_cliente)
    {
        $ClienteModel = new ClienteModel();
        $resultado_clientes = $ClienteModel->find($rfc_cliente);
        $rfc_cliente = $this->request->getVar('rfc_cliente');


        $datos_clientes = ['clientes'=>$resultado_clientes];
        return view('administrador/vista_administrador_cruds_clientes',$datos_clientes);
    }
}