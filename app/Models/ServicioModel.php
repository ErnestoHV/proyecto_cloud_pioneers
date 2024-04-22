<?php 
namespace App\Models;

use CodeIgniter\Model;

class ServicioModel extends Model
{
    protected $table      = 'servicio';
    protected $primaryKey = 'id_servicio';
    protected $allowedFields = ['id_servicio','id_cliente','id_especimen','id_solicitud','estado_servicio','fecha_inicio_servicio','fecha_fin_servicio'];

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    // protected $useTimeStamps = true;
    // protected $dateFormat = 'datetime';
    // protected $createdField = 'fecha_inicio_servicio';
    // protected $updatedField = 'fecha_fin_servicio';
}