<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'semana',
        'dia_semana',
        'tipo_comida',
        'menu_principal',
        'ingredientes',
        'alternativas',
        'fecha_menu'
    ];
}