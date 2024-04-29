<?php 
namespace App\Models;

use CodeIgniter\Model;

class EspecimenModel extends Model
{
    protected $table      = 'especimen';
    protected $primaryKey = 'id_especimen';
    
    protected $allowedFields = ['id_solicitud', 'id_usuario', 'id_servicio', 'folio_solicitud', 'nombre_cliente',
    'fecha_recepcion_especimen', 'descripcion_textual_especimen',
    'nombre_especimen', 'descripcion_especimen', 'uso_especimen', 'cantidad_especimen', 'marca_modelo_especimen',
    'numero_serie_especimen', 'tension_electrica_especimen', 'potencia_electrica_especimen','flujo_luminoso_lm_especimen',
    'temperatura_correlacionada_k_especimen','indice_rendimiento_color_especimen', 'horas_vida_especimen',
    'factor_potencia_nominal_especimen','material_carcasa_especimen', 'material_reflector_especimen', 'tipo_montaje_especimen',
    'tipo_controlador_drive', 'posicion_grados_horizontal_especimen', 'fabricante_luminaria', 'numero_modulos_tarjetas',
    'numero_leds_modulo', 'numero_catalogo_especimen', 'dimensiones_especimen', 'estado_especimen', 'aceptacion_especimen',
    'fecha_registro_especimen', 'fecha_modificacion_especimen', 'fecha_borrado_especimen', 'estado_registro_especimen'];

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $useTimeStamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'fecha_registro_especimen';
    protected $updatedField = 'fecha_modificacion_especimen';
    protected $deletedField = 'fecha_borrado_especimen';

}