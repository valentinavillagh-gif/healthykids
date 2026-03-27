<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MenuSeeder extends Seeder
{
    public function run()
    {
        $menus = [
            [
                'semana' => 1,
                'dia_semana' => 'Lunes',
                'tipo_comida' => 'Almuerzo',
                'menu_principal' => 'Pollo guisado con arroz y ensalada',
                'ingredientes' => 'Pollo, arroz, zanahoria, tomate, cebolla',
                'alternativas' => 'Opción vegetariana: Guiso de lentejas',
                'fecha_menu' => Carbon::now()->startOfWeek()
            ],
            [
                'semana' => 1,
                'dia_semana' => 'Martes',
                'tipo_comida' => 'Almuerzo',
                'menu_principal' => 'Carne molida con puré de papa',
                'ingredientes' => 'Carne de res, papa, leche, mantequilla',
                'alternativas' => 'Opción sin lactosa: Puré de papa con aceite de oliva',
                'fecha_menu' => Carbon::now()->startOfWeek()->addDay()
            ],
            [
                'semana' => 1,
                'dia_semana' => 'Miércoles',
                'tipo_comida' => 'Almuerzo',
                'menu_principal' => 'Pescado al horno con arroz integral',
                'ingredientes' => 'Pescado blanco, arroz integral, limón, especias',
                'alternativas' => 'Opción sin pescado: Hamburguesa de lentejas',
                'fecha_menu' => Carbon::now()->startOfWeek()->addDays(2)
            ],
        ];

        foreach ($menus as $menu) {
            Menu::create($menu);
        }
    }
}