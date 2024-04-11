<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Tecnico_laboratorioController extends BaseController
{
    public function index()
    {
        echo 'Route= /Tecnico_laboratorioController::index || Controller=Tecnico_laboratorioController';
        echo "<h1>Tecnico_laboratorioController</h1>";
       
        echo view ('plantilla/header');
        echo view ('tecnico_laboratorio/vista_tecnico_laboratorio');
        echo view ('plantilla/footer');
    }
}