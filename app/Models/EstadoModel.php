<?php 
namespace App\Models;

use CodeIgniter\Model;

class EstadoModel extends Model
{
    protected $table      = 'estado';
    protected $primaryKey = 'id_estado';
    protected $allowedFields = ['nombre_estado','fecha_creacion_estado','fecha_modificacion_estado','fecha_borrado_estado','estado_registro_tabla_estado'];

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $useTimeStamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'fecha_creacion_estado';
    protected $updatedField = 'fecha_modificacion_estado';
    protected $deletedField = 'fecha_borrado_estado';

}