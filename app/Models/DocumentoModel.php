<?php 
namespace App\Models;

use CodeIgniter\Model;

class DocumentoModel extends Model
{
    protected $table      = 'documento';
    protected $primaryKey = 'id_documento';
    protected $allowedFields = ['nombre_documento','id_estado','descripcion_documento','link_documento_plantilla'
    ,'fecha_carga_documento','fecha_modificacion_documento','fecha_borrado_documento'];

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $useTimeStamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'fecha_carga_documento';
    protected $updatedField = 'fecha_modificacion_documento';
    protected $deletedField = 'fecha_borrado_documento';

}