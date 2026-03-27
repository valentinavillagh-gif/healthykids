<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->integer('semana');
            $table->string('dia_semana');
            $table->string('tipo_comida');
            $table->text('menu_principal');
            $table->text('ingredientes');
            $table->text('alternativas');
            $table->date('fecha_menu');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('menus');
    }
};