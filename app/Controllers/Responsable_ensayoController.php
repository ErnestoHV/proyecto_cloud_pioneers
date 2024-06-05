<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Responsable_ensayoController extends BaseController
{
    public function index()
    {
        // echo 'Route= /Responsable_ensayoController::index || Controller=Responsable_ensayoController';
        // echo "<h1>Responsable_ensayoController</h1>";
       
        helper(['form']);
        return view ('responsable_ensayos/vista_responsable_ensayos');
    }
}