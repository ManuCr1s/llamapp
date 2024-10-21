<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criador extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_criador',
        'apellido_paterno',
        'apellido_materno',
        'nombres',
        'telefono',
        'dni',
        'nombre_ganaderia',
        'estado',
        'id_region',
        'id_province',
        'id_distrito',
        'id_centro_poblado',
        'id_caserio_anexo'
    ];
    protected $primaryKey = 'id_criador';
    protected $table = 'criadores';
    protected $casts = [
        'id_criador' => 'string',
    ];
}
