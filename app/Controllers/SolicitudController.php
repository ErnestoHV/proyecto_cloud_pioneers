<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class SolicitudController extends Controller
{
    public function index()
    {
        helper(['form']);
        return view('formulario_solicitud_servicio/vista_formulario_solicitud_servicio');
    }
}