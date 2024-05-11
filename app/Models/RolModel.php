<?php 
namespace App\Models;

use CodeIgniter\Model;

class RolModel extends Model
{
    protected $table      = 'rol';
    protected $primaryKey = 'id_rol';
    protected $allowedFields = ['nombre_rol','fecha_creacion_rol','fecha_modificacion_rol','fecha_borrado_rol'];

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $useTimeStamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'fecha_creacion_rol';
    protected $updatedField = 'fecha_modificacion_rol';
    protected $deletedField = 'fecha_borrado_rol';
}