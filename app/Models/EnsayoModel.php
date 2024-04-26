<?php 
namespace App\Models;

use CodeIgniter\Model;

class EnsayoModel extends Model
{
    protected $table      = 'ensayo';
    protected $primaryKey = 'id_ensayo';

    protected $allowedFields = ['tipo_ensayo', 'codigo_ensayo', 'nombre_ensayo', 'norma_oficial_mexicana', 	'fecha_creacion_ensayo', 'fecha_modificacion_ensayo', 'fecha_borrado_ensayo', 'estado_registro_ensayo'];

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $useTimeStamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'fecha_creacion_ensayo';
    protected $updatedField = 'fecha_modificacion_ensayo';
    protected $deletedField = 'fecha_borrado_ensayo';
}