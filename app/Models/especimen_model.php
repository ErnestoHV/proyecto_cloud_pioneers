<?php

namespace App\Models;

use CodeIgniter\Model;

class especimen_model extends Model
{
    protected $table = 'especimen'; // Asegúrate de que el nombre de la tabla es correcto.
    protected $primaryKey = 'id_especimen';
    protected $allowedFields = ['nombre_del_especimen_bajo_prueba', 'descripcion', 'uso_del_especimen', 'marca_modelo','numero_de_serie','tencion_electrica','potencia_electrica','valor_flujo','temperatura_color','indice_de_rendimiento_color','horas_vital','factor_potencia','tipo_material_caracasa','tipo_material_reflector','tipo_de_montaje','tipo_controlador','posicion_luminaria_grados','id_cliente'];
}