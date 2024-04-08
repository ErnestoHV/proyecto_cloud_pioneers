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
        helper(['form']);
        return view ('login/login');
    }

    public function loginAuth()
    {
        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getVar('uEmail');
        $password = $this->request->getVar('uPassword');

        $data = $userModel->where('correo_electronico', $email)->first();
        
        if($data){
            $pass = $data['contraseña'];
            if(password_verify($password, $pass)){
                $ses_data = [
                    'id_usuario' => $data['id_usuario'],
                    'email' => $data['correo_electronico'],
                    'nombre_usuario' => $data['nombre_usuario'],
                    'apellidos_usuario' => $data['apellidos_usuario'],
                    'id_rol' => $data['id_rol'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);

                if($data['id_rol'] == 1 || $data['id_rol'] == 6)
                {
                    return redirect()->to(base_url('supervisor/vista_supervisor'));  
                }
                else
                {
                    if($data['id_rol'] == 2)
                    {
                        return redirect()->to(base_url('responsable_ensayos/vista_responsable_ensayo'));
                    }
                    else
                    {
                        if($data['id_rol'] == 3 || $data['id_rol'] == 4 || $data['id_rol'] == 7)
                        {
                            return redirect()->to(base_url('tecnico_laboratorio/vista_tecnico_laboratorio'));
                        }
                        else
                        {
                            if ($data['id_rol'] == 5)
                            {
                                return redirect()->to(base_url('administrador/vista_administrador'));
                            }
                        }
                    }
                }
            
            }else{
                $session->setFlashdata('msg', 'La contraseña no es válida.');
                return redirect()->to(base_url('login/login'));
            }
        }
        else
        {
            $session->setFlashdata('msg', 'El email/contraseña introducidos no son válidos.');
            return redirect()->to(base_url('login/login'));
        }

    }
    public function logout()
    {
        $session = session();
        $session->remove('email','nombre_usuario','apellidos_usuario','id_rol');
        session_destroy();

        return redirect()->to(base_url('login/login'));
    }
}