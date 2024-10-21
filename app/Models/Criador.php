<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criador extends Model
{
    use HasFactory;
    protected $fillable = [
        'apellido_paterno',
        'apellido_materno',
        'nombres',
        'telefono',
        'dni',
        'nombre_ganaderia'
    ];
    protected $primaryKey = 'id_criador';
    protected $table = 'criadores';
    protected $casts = [
        'id_criador' => 'string',
    ];
}
