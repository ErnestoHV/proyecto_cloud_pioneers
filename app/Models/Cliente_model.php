<?php

namespace App\Models;

use CodeIgniter\Model;

class cliente_model extends Model
{
    
    protected $table = 'cliente'; // Asegúrate de que el nombre de la tabla es correcto.
    protected $primaryKey = 'id_cliente';
    protected $allowedFields = ['nombre_del_cliente', 'razon_social', 'direccion', 'rfc','telefono','e_mail','fecha_de_creacion'];

}