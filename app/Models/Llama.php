<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Llama extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_llama';
    protected $table = 'llamas';
    protected $casts = [
        'id_llama' => 'string',
    ];
}
