<?php 
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'usuario';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['id_rol','contrasena_usuario','correo_electronico','nombre_usuario','apellidos_usuario','fecha_modificacion_usuario'];
}

