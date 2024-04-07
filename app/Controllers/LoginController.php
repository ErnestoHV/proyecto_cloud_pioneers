<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class LoginController extends BaseController
{
    public function index()
    {
        echo "<h1>LoginController</h1>";
        print_r($this->session);
    }

    public function show()
    {
        echo "<h2>Función show()</h2>";
    }
}