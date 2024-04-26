<?php

namespace App\Models;

use CodeIgniter\Model;

class factura_otra_empresa_model extends Model
{
    
    protected $table = 'factura_otra_empresa'; // Asegúrate de que el nombre de la tabla es correcto.
    protected $primaryKey = 'id_factura_otra_empresa';
    protected $allowedFields = ['razon_social', 'direccion', 'rfc', 'e_mail_telefono','id_cliente'];

}