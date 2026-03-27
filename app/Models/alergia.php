<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alergia extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_completo',
        'grado',
        'alergias',
        'intolerancias',
        'preferencias',
        'contacto_emergencia',
        'telefono_emergencia'
    ];
}