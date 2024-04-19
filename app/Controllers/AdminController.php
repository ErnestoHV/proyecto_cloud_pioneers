<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class AdminController extends BaseController
{
    public function index()
    {
        echo 'Route= /AdminController::index || Controller=AdminController';
        echo "<h1>AdminController</h1>";
       
        return view('administrador/vista_administrador');
        // echo view ('plantilla/header');
        // echo view ('administrador/vista_administrador');
        // echo view ('plantilla/footer');
    }
}