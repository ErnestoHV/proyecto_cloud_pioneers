<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
// use App\Models\UserModel;
use App\Models\ServicioModel;
use App\Models\SolicitudModel;
// use App\Models\RolModel;
use App\Models\DocumentoModel;
use App\Models\EstadoModel;
use App\Models\ClienteModel;
use App\Models\EnsayoModel;

class SolicitudController extends Controller
{
    public function index()
    {
        helper(['form']);
        return view('formulario_solicitud_servicio/vista_formulario_solicitud_servicio');
    }

    public function alta_datos_solicitud()
    {

    }
}