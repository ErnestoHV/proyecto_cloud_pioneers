<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class LoginController extends BaseController
{
    public function index()
    {
        echo 'Route= /LoginController::index || Controller=LoginController';
        echo "<h1>LoginController</h1>";
        // print_r($this->session);
        return view ('login/login');
    }

    public function show()
    {
        echo 'Route= /LoginController::show || Controller=LoginController';
        echo "<h2>Función show()</h2>";
    }
}