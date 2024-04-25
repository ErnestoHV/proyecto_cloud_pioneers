<?php 
namespace App\Models;

use CodeIgniter\Model;

class SolicitudModel extends Model
{
    protected $table      = 'solicitud';
    protected $primaryKey = 'id_solicitud';
    protected $allowedFields = ['id_cliente','fecha_solicitud','folio_solicitud','medio_recibo_solicitud','dimension_especimen','comentarios','conformidad','referencia_normativa','regla_de_decision','limites_tolerancia','fecha_registro_solicitud','fecha_modificacion_solicitud'];

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $useTimeStamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'fecha_registro_solicitud';
    protected $updatedField = 'fecha_modificacion_solicitud';
    protected $deletedField = 'fecha_borrado_solicitud';
}
