<?php 
namespace App\Models;

use CodeIgniter\Model;

class ClienteModel extends Model
{
    protected $table      = 'cliente';
    protected $primaryKey = 'id_cliente';

    protected $allowedFields = ['nombre_contacto', 'razon_social', 'direccion_cliente', 'rfc_cliente', 'telefono_cliente', 'correo_electronico_cliente', 'fecha_creacion_cliente', 'fecha_modificacion_cliente'	,'fecha_borrado_cliente','estado_registro_cliente'];

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $useTimeStamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'fecha_creacion_cliente';
    protected $updatedField = 'fecha_modificacion_cliente';
    protected $deletedField = 'fecha_borrado_cliente';
}