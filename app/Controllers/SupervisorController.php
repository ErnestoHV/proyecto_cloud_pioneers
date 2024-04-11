<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class SupervisorController extends BaseController
{
    public function index()
    {
        echo 'Route= /SupervisorController::index || Controller=SupervisorController';
        echo "<h1>SupervisorController</h1>";
       
        echo view ('plantilla/header');
        echo view ('supervisor/vista_supervisor');
        echo view ('plantilla/footer');
    }
}