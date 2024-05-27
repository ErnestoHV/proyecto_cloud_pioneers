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
        return view('plantilla/plantilla_administrador');
    }

    /////////////////////////////
    ///Funciones CRUD clientes///
    /////////////////////////////

    //Vista de clientes con registro activo
    public function admin_cruds_clientes()
    {
        $ClienteModel = new ClienteModel();
        $resultado_clientes = $ClienteModel->findAll();
        
        
        $datos_clientes = ['clientes'=>$resultado_clientes];
        return view('administrador/vista_administrador_cruds_clientes',$datos_clientes);
        
    }
    //Vista de clientes con registro activo
    public function admin_clientes_inactivos()
    {
        $ClienteModel = new ClienteModel();
        $resultado_clientes = $ClienteModel->OnlyDeleted()->findAll();
        
        
        $datos_clientes = ['clientes'=>$resultado_clientes];
        return view('administrador/vista_administrador_clientes_inactivos',$datos_clientes);
        
    }
    //Vista de todos los registros de los clientes
    public function admin_clientes_todos()
    {
        $ClienteModel = new ClienteModel();
        $resultado_clientes = $ClienteModel->withDeleted()->findAll();
        
        
        $datos_clientes = ['clientes'=>$resultado_clientes];
        return view('administrador/vista_administrador_clientes_todos',$datos_clientes);
    }

    //Alta de clientes
    public function admin_cruds_clientes_alta()
    {
        return view('administrador/vista_administrador_alta_clientes');
    }

    public function admin_cruds_clientes_alta_new()
    {
                
        $ClienteModel = new ClienteModel();
        $data = (
        [
            'nombre_contacto' =>$this->request->getpost('nombre_contacto'),
            'razon_social ' =>$this->request->getpost('razon_social'),
            'direccion_cliente' =>$this->request->getpost('direccion_cliente'),
            'rfc_cliente' =>$this->request->getpost('rfc_cliente'),
            'telefono_cliente' =>$this->request->getpost('telefono_cliente'),
            'correo_electronico_cliente' =>$this->request->getpost('correo_electronico_cliente')
        ]);
        $ClienteModel->insert($data);
        return redirect()->to(base_url('administrador/vista_administrador_cruds_clientes'));
    }

    //Borrado de clientes
    public function admin_cruds_clientes_baja($id)
    {
        $ClienteModel = new ClienteModel();
        $ClienteModel->where('id_cliente', $id)->delete($id);
        return redirect()->to(base_url('administrador/vista_administrador_cruds_clientes'));
    }

    //Edición de clientes
    public function admin_cruds_clientes_modificacion($id)
    {
        $ClienteModel = new ClienteModel();
        $data=[
            'nombre_contacto' =>$this->request->getpost('nombre_contacto'),
            'razon_social' =>$this->request->getpost('razon_social'),
            'direccion_cliente' =>$this->request->getpost('direccion_cliente'),
            'rfc_cliente' =>$this->request->getpost('rfc_cliente'),
            'telefono_cliente' =>$this->request->getpost('telefono_cliente'),
            'correo_electronico_cliente' =>$this->request->getpost('correo_electronico_cliente'),
        ];
        $ClienteModel->update($id, $data);

        return redirect()->to(base_url('administrador/vista_administrador_cruds_clientes'));
    }


    /////////////////////////////
    ///Funciones CRUD usuarios///
    /////////////////////////////

    //Vista de usuarios
    public function admin_cruds_usuarios()
    {
        
        $UserModel = new UserModel();
        $RolModel = new RolModel();
        $resultado_usuarios = $UserModel->findAll(); 
        $resultado_roles = $RolModel->findAll();

        $datos_usuarios =['usuarios'=>$resultado_usuarios,'roles'=>$resultado_roles ];
        return view('administrador/vista_administrador_cruds_usuarios',$datos_usuarios);
    }

    //////////////////////////////
    ///Funciones CRUD servicios///
    //////////////////////////////


    //Vista de servicios
    public function admin_servicios()
    {

        $ServicioModel = new ServicioModel();
        $resultado_servicios = $ServicioModel->findAll(); 
        
        $datos_servicios =['servicios'=>$resultado_servicios];

        return view('administrador/vista_administrador_servicios',$datos_servicios);
    }

    ////////////////////////////////
    ///Funciones CRUD solicitudes///
    ////////////////////////////////

    public function admin_solicitudes()
    {
        $SolicitudModel = new SolicitudModel();
        $resultado_solicitudes = $SolicitudModel->findAll(); 
        
        $datos_solicitudes =['solicitudes'=>$resultado_solicitudes];

        return view('administrador/vista_administrador_solicitudes',$datos_solicitudes);
    }

    ///////////////////////////////
    ///Funciones CRUD documentos///
    ///////////////////////////////

    public function admin_cruds_documentos()
    {
        $DocumentoModel = new DocumentoModel();
        $EstadoModel = new EstadoModel();
        $resultado_documentos = $DocumentoModel->findAll(); 
        $resultado_estados = $EstadoModel->findAll();
        
        $datos_documentos =['documentos'=>$resultado_documentos,'estados'=>$resultado_estados];

        return view('administrador/vista_administrador_cruds_documentos',$datos_documentos);
        
    }

    public function admin_cruds_documentos_alta_new()
    {
                
        $DocumentoModel = new DocumentoModel();
        $data = (
        [
            'nombre_documento' =>$this->request->getpost('nombre_documento'),
            'id_estado ' =>$this->request->getpost('id_estado'),
            'descripcion_documento' =>$this->request->getpost('descripcion_documento'),
            'link_documento_plantilla' =>$this->request->getpost('link_documento_plantilla'),
        ]);
        $ClienteModel->insert($data);
        return redirect()->to(base_url('administrador/vista_administrador_cruds_clientes'));
    }

    //Borrado de clientes
    public function admin_cruds_documentos_baja($id)
    {
        $DocumentoModel = new DocumentoModel();
        $DocumentoModel->where('id_documento', $id)->delete($id);
        return redirect()->to(base_url('administrador/vista_administrador_cruds_documentos'));
    }

    ////////////////////////////
    ///Funciones CRUD ensayos///
    ////////////////////////////

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