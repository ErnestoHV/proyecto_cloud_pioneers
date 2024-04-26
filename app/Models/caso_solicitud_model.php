<?php

namespace App\Models;

use CodeIgniter\Model;

class caso_solicitud_model extends Model
{
    
    protected $table = 'caso_solicitud'; // Asegúrate de que el nombre de la tabla es correcto.
    protected $primaryKey = 'id_caso_solicitud';
    protected $allowedFields = ['fabricante_luminaria', 'numero_tarjetas_led', 'numero_leds_modulo', 'numero_catalogo','dimenciones','id_cliente'];

}