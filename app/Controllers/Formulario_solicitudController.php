<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Formulario_solicitudController extends BaseController
{
    public function index()
    {
        return view('formulario_solicitud_servicio/formulario_solicitud_servicio');
    }
}