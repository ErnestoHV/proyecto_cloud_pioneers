<?php 
namespace App\Models;

use CodeIgniter\Model;

class FacturaOtroClienteModel extends Model{
    protected $table      = 'factura_otro_cliente';
    protected $primaryKey = 'id_factura_otro_cliente';

    protected $allowedFields = ['razon_social_otro_cliente','direccion_otro_cliente','rfc_otro_cliente',
    'e_mail_telefono_otro_cliente','id_cliente','fecha_registro_otro_cliente','fecha_modificacion_otro_cliente',
    'fecha_borrado_otro_cliente'];

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $useTimeStamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'fecha_registro_otro_cliente';
    protected $updatedField = 'fecha_modificacion_otro_cliente';
    protected $deletedField = 'fecha_borrado_otro_cliente';
}