<?php

namespace App\Models;

use CodeIgniter\Model;

class reseña_model extends Model
{
    protected $table = 'resena'; // Asegúrate de que el nombre de la tabla es correcto.
    protected $primaryKey = 'id_resena';
    protected $allowedFields = ['comentarios', 'conformidad', 'referencia_normativa', 'regla_decision','definicion_tolerancia','id_cliente'];

}